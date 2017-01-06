<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Ticket;
use App\Collection;
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
        $tickets =  Ticket::all();
        $posts =  Post::where('status', '1')->orderBy('id', 'DESC')->limit(4)->get();
        return view('frontend.pages.index', compact('posts', 'tickets'));
    }

    public function category($id){
        $posts = Post::where('status', '1')->where('category_id', $id)->paginate(10);
        $categories = Category::all();
        $recent_posts = Post::orderBy('id', 'DESC')->limit(5)->get();
        $category = Category::find($id);
        return view('frontend.pages.category',compact('posts', 'categories', 'recent_posts', 'category'));
    }

    public function post($id){
        $post = Post::where('id', $id)->first();
        $categories = Category::all();
        $recent_posts = Post::orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.pages.post',compact('post', 'categories','recent_posts'));
    }

    public function allPost()
    {
        # code...
        $posts =  Post::where('status', '1')->paginate(10);
        $categories = Category::all();
        $recent_posts = Post::where('status', '1')->orderBy('id', 'DESC')->limit(5)->get();
        return view('frontend.pages.all_post',compact('posts', 'categories', 'recent_posts'));

    }

    public function contact()
    {
        # code...
        return view('frontend.pages.contact');

    }

    public function about()
    {
        # code...
        return view('frontend.pages.about');

    }


    public function collection()
    {
        # code...
        $collections = Collection::all();
        return view('frontend.pages.collection', compact('collections'));

    }
    
    


    



}
