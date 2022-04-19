<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
    public function index() {
        $owners= owner::all();
            $data= [ 'owners' => $owners];
            return view('user_page',$data);
    }

    public function create() {
        return view('owner_page');
    }

    public function store(Request $request) {
        $owner = new owner();
        $owner->week_day = $request->week_day;
        $owner->start_time = $request->start_time;
        $owner->end_time = $request->end_time;
        $owner->term = $request->term;
        $owner->fee = $request->fee;
        $owner->location= $request->location;
        $owner->number = $request->number;
        $owner->size = $request->size;
        $owner->picture = $request->picture;
        $owner->status = $request->status;
        $owner->remark = $request->remark;
        $owner->save();
        return view('user_page'); 
    }
}
