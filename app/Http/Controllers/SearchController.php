<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\owner;

class SearchController extends Controller
{
    public function index(Request $request){
        $query = Owner::query();
        
        $search1 = $request->input('week_day');
        $search2 = $request->input('location');
        $search3 = $request->input('term');

        if ($search1!="null") {
            //dump($search1);
            $query=$query->where('week_day',$search1);
            //dd($test);
        }

        if ($search2!="null") {
            //dump($search2);
            $query=$query->where('location', $search2);
            //dump($query);
        }

        if ($search3!="null") {
            //dump($search3);
            $query=$query->where('term', $search3);
        }
        $owners=$query->get();
        //dd($test);
        return view('search_page',compact('owners'));
        }
    
    public function show($owner_id) {

        $owner = owner::find($owner_id);

        return view('syousai',compact('owner'));
    }

}
