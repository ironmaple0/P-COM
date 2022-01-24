<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\owner;

class SearchController extends Controller
{
    public function index(Request $request){
         //dd($request);
         $query = Owner::query();
         
         $search1 = $request->input('week_day');
         $search2 = $request->input('location');
         $search3 = $request->input('term');

        if ($search1!=null) {
            $query->where('week_day',$search1)->get();
        }

        if ($search2!=null) {
            $query->where('location', $search2)->get();
        }

        if ($search3!=null) {
            $query->where('term', $search3)->get();
        }
        return view('user_page');
    }

}
