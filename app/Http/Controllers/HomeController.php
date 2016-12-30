<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts =  Post::limit(6)->get();
        return view('frontend.pages.index', compact('posts'));
    }

    public function category($id){
        $posts = Post::where('category_id', $id)->paginate(15);
        return view('frontend.pages.category',compact('posts'));
    }

    public function post($id){
        $post = Post::where('id', $id)->first();
        return view('frontend.pages.post',compact('post'));
    }



}
