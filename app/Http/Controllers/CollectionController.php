<?php

namespace App\Http\Controllers;

use App\Media;
use App\Collection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class CollectionController extends Controller
{
    public function getAdd(){
        return view('admin.collections.add');
    }

    public function postAdd(Request $request){
        $collection =  new Collection();
        $collection->title = $request->title;
        $collection->status =$request->status;
        $collection->save();
        if($request->hasFile('file')){
            foreach($request->file as $image){
                $collection->addMedia($image)->toMediaLibrary();
            }
        }
        return Redirect::to('admin/collection/list');
    }

    public function getList(){
        $collections =  Collection::select('*')->orderBy('id', 'DESC')->get();
        return view('admin.collections.list', compact('collections'));
    }

    // public function getDetail($id){
    //     $collection = Collection::findOrFail($id);
    //     $collection->category;
    //     return $collection;
    //     // return view('admin.collection.detail', compact('post'));
    // }

    public function getEdit($id){
        $collection = Collection::findOrFail($id);
        return view('admin.collections.edit', compact('collection'));
    }

    public function postEdit(Request $request, $id){
        $update_post = Collection::where('id', $id)->update([
            'title'=>$request->title,
            'status'=>$request->status,
        ]);
        if($update_post ==1){
            if($request->hasFile('file')){
                $add_post =  Collection::findOrFail($id);
                foreach($request->file as $image){
                    $add_post->addMedia($image)->toMediaLibrary();
                }
            }
        }
        return Redirect::to('admin/collection/list');
    }

    public function delete(Request $request){
        $delete_collection = Collection::find($request->id);
        $delete_collection->delete();
        return response()->json();
    }

    public function deleteImage(Request $request){
        Media::findOrFail($request->id)->delete();
        return response()->json();
    }

    public function editStatus(Request $request, $id){
        Collection::where('id', $id)->update(['status'=>$request->status]);
        return response()->json();
    }

}
