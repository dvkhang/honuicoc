<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use Illuminate\Support\Facades\Redirect;

class TicketController extends Controller
{
    public function getAdd()
    {
    	return view('admin.tickets.add');
    }


    public function postAdd(Request $request){
        $ticket =  new Ticket();

        $ticket->classify = $request->classify;
        $ticket->price = $request->price;
        $ticket->save();

        if($request->hasFile('file')){
            foreach($request->file as $image){
                $ticket->addMedia($image)->toMediaLibrary();
            }
        }
        return Redirect::to('admin/ticket/list');
    }


    public function getList(){
        $tickets =  Ticket::all();
        return view('admin.tickets.list', compact('tickets'));
    }


    public function getEdit($id){
        $ticket = Ticket::find($id);
        return view('admin.tickets.edit', compact('ticket'));
    }

    public function postEdit(Request $request,$id){
    	$ticket = Ticket::where('id', $id)->update([
            'classify'=>$request->classify,
            'price'=>$request->price
        ]);
        if($ticket ==1){
            if($request->hasFile('file')){
                $add_ticket =  Ticket::findOrFail($id);
                $add_ticket->addMedia($request->file)->toMediaLibrary();
            }
        }
        return Redirect::to('admin/ticket/list');

    }

    public function getDelete(Request $request){

        $ticket = Ticket::find($request->id);
        $ticket->delete();
        return response()->json();
    }
}
