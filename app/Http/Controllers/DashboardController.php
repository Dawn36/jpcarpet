<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('admin'))
        {
            $year=DATE("Y");
            $monthCount=array();
            for ($i=1; $i < 13 ; $i++) { 
                $monthCount[$i]=0;
            }
            $categories= DB::select(DB::raw("SELECT c.*, COUNT(b.`categories_id`) AS blogs_count  FROM categories c LEFT JOIN blogs b 
            ON c.id = b.`categories_id` GROUP BY c.id ORDER BY c.`id` DESC"));
            $totalUser=User::count();
            $blogYearCount=DB::select(DB::raw("SELECT MONTH(created_at) AS `month`,COUNT(id) AS blog_count FROM `blogs` b WHERE b.`status`='active' AND YEAR(created_at)='$year' GROUP BY MONTH(created_at)"));
            for ($i=0; $i < count($blogYearCount) ; $i++) { 
                $monthCount[$blogYearCount[$i]->month]=$blogYearCount[$i]->blog_count;
            }
            $monthCount=json_encode(array_values($monthCount));
           
            return view('dashboard/dashboard',compact('categories','totalUser','monthCount'));
        }
        if(Auth::user()->hasRole('user'))
        {
            return redirect()->route('user.show',Auth::user()->id);
        }

       
    }
}
