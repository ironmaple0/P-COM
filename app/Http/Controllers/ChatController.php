<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index(){
        dump("test1");
        $comments = Comment::get();
        //dd($comments);
        return view('chat', ['comments' => $comments]);
    }

    public function add(Request $request)
    {
     //dd("test2");
    $user = Auth::user();
    $comment = $request->input('comment');
    Comment::create([
        'login_id' => $user->id,
        'name' => $user->name,
        'comment' => $comment
    ]);
    return redirect()->route('chat');
    }
    
    public function getData(){
    $comments = Comment::orderBy('created_at', 'desc')->get();
    $json = ["comments" => $comments];
    return response()->json($json);
    }

    public function show() {
        return view('contract');
    }
}