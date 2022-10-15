<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Models\User;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog= DB::select(DB::raw("SELECT b.`id`,b.`blog_name`,c.`name`,u.`first_name`,u.`last_name`,b.`created_at` FROM `blogs` b INNER JOIN `categories` c ON b.`categories_id`=c.`id` INNER JOIN `users` u
        ON u.id=b.`user_id` WHERE b.`status`='active' ORDER BY b.`id` DESC"));
        return view('blog/blog_index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Categories::get();
        return view('blog/blog_create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;

        $request->validate([
            'file' => ['required'],
            'categories_id' => ['required'],
            'blog_name' => ['required'],
            'i_frame_link' => ['required'],
            'description' => ['required'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'meta_keywords' => ['required'],
            'status' => ['required'],
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
                $file_name = time() . $file->getClientOriginalName();
                $size = $file->getSize();
                $destinationPath = base_path('public/uploads/blogss/' . $userId);
                $file->move($destinationPath, $file_name);
                $path = 'uploads/blogss/' . $userId . "/" . $file_name;

        }
        if(Auth::user()->hasRole('admin'))
        {
            if($request->status == 'inactive')
            {
                $status='inactive';
            }
            else
            {
                $status='active';
            }
        }
        else
        {
            $status='hold';

        }
        
        $user = Blog::create([
            'user_id' => $userId,
            'status' =>$status,
            'categories_id' => $request->categories_id,
            'blog_thumbnail' => $path,
            'blog_name' => $request->blog_name,
            'i_frame_link' => $request->i_frame_link,
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'created_at' => Controller::currentDateTime(),
            'created_by' => $userId,

        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $blog=Blog::find($id);
        $userId=$blog->user_id;
        $categoriesId=$blog->categories_id;
        $categoriesName=Categories::find($categoriesId);
        $blogRecent=Blog::Where('user_id',$userId)->where('id','!=',$id)->orderby('id','desc')->limit(4)->get();
        $user=User::find($userId);
        $categories= DB::select(DB::raw("SELECT c.*, COUNT(b.`categories_id`) AS blogs_count  FROM categories c LEFT JOIN blogs b 
        ON c.id = b.`categories_id` GROUP BY c.id ORDER BY c.`id` DESC"));

        return view('blog/blog_show',compact('blog','user','blogRecent','categories','categoriesName'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories=Categories::get();
        $blog=Blog::find($id);
        return view('blog/blog_edit',compact('categories','blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $userId = Auth::user()->id;

        $request->validate([
            'categories_id' => ['required'],
            'blog_name' => ['required'],
            'i_frame_link' => ['required'],
            'description' => ['required'],
            'meta_title' => ['required'],
            'meta_description' => ['required'],
            'meta_keywords' => ['required'],
            'status' => ['required'],
        ]);
        $blog = Blog::find($id);
        if(Auth::user()->hasRole('admin'))
        {
            $status=$request->status;
        }
        else
        {
            if ($request->status == 'active' ) {
                $status = 'hold';
            } else {
                $status =  $request->status;
            }
        }
        
        $blog['categories_id'] = $request->categories_id;
        $blog['status'] = $status;
        $blog['blog_name'] = $request->blog_name;
        $blog['i_frame_link'] = $request->i_frame_link;
        $blog['description'] = $request->description;
        $blog['meta_title'] = $request->meta_title;
        $blog['meta_description'] = $request->meta_description;
        $blog['meta_keywords'] = $request->meta_keywords;
        $blog['updated_by'] = Auth::user()->id;
        $blog['updated_at'] = date("Y-m-d");
        $blog->save();


        if ($request->hasFile('file')) {
            $folderName = $id;
            $fileName = time();
            $previousPic = $blog->blog_thumbnail;
            $previousPicDest =  $previousPic;
            File::delete($previousPicDest);


            $path = "uploads/blogss/" . $userId;
            $file = $request->file('file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path($path), $filename);
            $blog['blog_thumbnail'] = $path . "/" . $filename;

            $blog->save();
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data = Blog::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function blogAccept(int $id)
    {
        $bids = Blog::find($id);
        $bids['status'] = 'active';
        $bids->save();
        return redirect()->back();
    }
    public function blogReject(int $id)
    {
        $bids = Blog::find($id);
        $bids['status'] = 'rejected';
        $bids->save();
        return redirect()->back();
    }
    public function blogPending()
    {
        $blog= DB::select(DB::raw("SELECT b.`id`,b.`blog_name`,c.`name`,u.`first_name`,u.`last_name`,b.`created_at` FROM `blogs` b INNER JOIN `categories` c ON b.`categories_id`=c.`id` INNER JOIN `users` u
        ON u.id=b.`user_id` WHERE b.`status`='hold' ORDER BY b.`id` DESC"));
        return view('blog/blog_pending',compact('blog'));  
    }
}
