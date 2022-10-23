<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class WebsiteController extends Controller
{
    public function index()
    {
        $blog=DB::table('blogs AS b')
      ->join('users AS u', 'b.user_id', '=', 'u.id')
      ->select(DB::raw('b.*,u.`first_name`,u.`last_name`'))
      ->where('b.status', 'active')
      ->orderBy('b.id', 'desc')->paginate(7);
      
        return view('website/blog',compact('blog'));
    }
    public function blogDetails($name)
    {
      $slug = Str::slug($name, ' ');
        $blogDetails=DB::table('blogs AS b')
      ->join('users AS u', 'b.user_id', '=', 'u.id')
      ->select(DB::raw('b.*,u.`first_name`,u.`last_name`'))
      ->where('b.status', 'active')
      ->where('b.blog_name', $slug)->get();
      
        return view('website/blog_details',compact('blogDetails'));
    }
}
