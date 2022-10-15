<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categories=Categories::get();
        $categories= DB::select(DB::raw("SELECT c.*, COUNT(b.`categories_id`) AS blogs_count  FROM categories c LEFT JOIN blogs b 
          ON c.id = b.`categories_id` GROUP BY c.id ORDER BY c.`id` DESC"));
        return view('categories/categories_index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories/categories_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId=Auth::user()->id;
        $request->validate([
            'name' => ['required'],
        ]);
        
        $user = Categories::create([
            'name' => $request->name,
            'user_id'=>$userId,
            'created_at' => Controller::currentDateTime(),
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories=Categories::find($id);
        return view('categories/categories_edit',compact('categories'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => ['required'],
        ]);
        $model = Categories::find($id);
        $model['name'] = $request->name;
        $model['updated_at'] = Controller::currentDateTime();
        $model->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data = Categories::find($id);
        $data->delete();
        return redirect()->back();
    }
}
