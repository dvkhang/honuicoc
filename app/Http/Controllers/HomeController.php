<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Ticket;
use App\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use RocketCode\Shopify\API;

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
        $post =  Post::count();
        $collection = Collection::count();
        return view('admin.index', compact('post', 'collection'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $tickets =  Ticket::all();
        $collections =Collection::orderBy('id', 'DESC')->limit(3)->get();
        $posts =  Post::where('status', '1')->orderBy('id', 'DESC')->limit(4)->get();
        return view('frontend.pages.index', compact('posts', 'tickets', 'collections'));
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

    public function ticket()
    {
        # code...
        $tickets = Ticket::all();
        return view('frontend.pages.ticket', compact('tickets'));

    }
    public function invite(){
        return view('frontend.pages.invite');
    }

    public function instagram(){
        $shopify =App::make('ShopifyAPI', [
            'API_KEY' => 'a7d11e7a151813101e0dbd1b358378c2',
            'API_SECRET' => '4bf92d650d9d5226f5d892d35b25316b',
            'SHOP_DOMAIN' => 'https://cutetoro-com.myshopify.com',
            'ACCESS_TOKEN' => 'e164882f4d8b5e39ea7142104011fd77-1487666830'
        ]);

        // Gets a list of products
        $result = $shopify->call([
            'METHOD'     => 'GET',
            'URL'         => '/admin/products.json?page=1'
        ]);

        $products = $result->products;
        dd('f');
        var_dump($products);
        // Print out the title of each product we received
    }
    
    


    



}
