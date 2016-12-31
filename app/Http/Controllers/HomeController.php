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

    public function dashboard()
    {
        return view('admin.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $posts =  Post::orderBy('id', 'DESC')->limit(6)->get();
        return view('frontend.pages.index', compact('posts'));
    }

    public function category($id){
        $posts = Post::where('category_id', $id)->paginate(10);
        $categories = Category::all();
        $recent_posts = Post::orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.pages.category',compact('posts', 'categories', 'recent_posts'));
    }

    public function post($id){
        $post = Post::where('id', $id)->first();
        $categories = Category::all();
        $recent_posts = Post::orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.pages.post',compact('post', 'categories','recent_posts'));
    }



}
