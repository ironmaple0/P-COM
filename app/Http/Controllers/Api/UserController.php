<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
      $users = User::all();
      return $users;
  }

  public function store(Request $request){
    DB::beginTransaction();
    try {
    $user = new user();
    $user->name= $request->name;
    $user->email= $request->email;
    $user->password= Hash::make($request->password);
    $user->post_code= $request->post_code;
    $user->address= $request->address;
    $user->save();
    DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return -1;
        }
    return 0;
  }
}
