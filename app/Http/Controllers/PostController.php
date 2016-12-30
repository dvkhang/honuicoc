<?php

namespace App\Http\Controllers;

use App\Media;
use App\Post;
use App\PostMedia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    public function getAdd(){
        return view('admin.posts.add');
    }

    public function postAdd(Request $request){
        $post =  new Post();
        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->description = htmlentities($request->description, ENT_QUOTES);
        $post->category_id =$request->category;
        $post->status =$request->status;
        $post->save();
        if($request->hasFile('file')){
            foreach($request->file as $image){
                $post->addMedia($image)->toMediaLibrary();
            }
        }
        return Redirect::to('admin/post/list');
    }

    public function getList(){
        $posts =  Post::select('*')->orderBy('id', 'DESC')->get();
        return view('admin.posts.list', compact('posts'));
    }

    public function getDetail($id){
        $post = Post::findOrFail($id);
        return view('admin.posts.detail', compact('post'));
    }

    public function getEdit($id){
        $post = Post::findOrFail($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function postEdit(Request $request, $id){
        $update_Post = Post::where('id', $id)->update([
            'name'=>$request->name,
            'summary'=>$request->feature,
            'description'=>$request->description,
            'status'=>$request->status,
            'category_id'=>$request->category,
        ]);
        if($update_Post ==1){
            if($request->hasFile('file')){
                $add_Post =  Post::findOrFail($id);
                foreach($request->file as $image){
                    $add_Post->addMedia($image)->toMediaLibrary();
                }
            }
        }
        return Redirect::to('admin/Post/list');
    }

    public function delete(Request $request){
        $delete_Post = Post::find($request->id);
        $delete_Post->delete();
        return response()->json();
    }

    public function deleteImage(Request $request){
        Media::findOrFail($request->id)->delete();
        return response()->json();
    }

    public function editStatus(Request $request, $id){
        Post::where('id', $id)->update(['status'=>$request->status]);
        return response()->json();
    }

}
