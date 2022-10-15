<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=ContactUs::get();
        return view('contact-us/contact_us_index',compact('contacts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'city' => ['required'],
            'message' => ['required'],
        ]);
        
        $user = ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'message' => $request->message,
            'created_at' => Controller::currentDateTime(),
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $contactUs=ContactUs::find($id);
        return view('contact-us/contact_us_show',compact('contactUs'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $contactUs=ContactUs::find($id);
        return view('contact-us/contact_us_edit',compact('contactUs'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'city' => ['required'],
            'message' => ['required'],
        ]);
        $userId=Auth::user()->id;
        $model = ContactUs::find($id);
        $model['name'] = $request->name;
        $model['email'] = $request->email;
        $model['city'] = $request->city;
        $model['message'] = $request->message;
        $model['updated_at'] = Controller::currentDateTime();
        $model['updated_by'] = $userId;
        $model->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactUs  $contactUs
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $data = ContactUs::find($id);
        $data->delete();
        return redirect()->back();
    }
}
