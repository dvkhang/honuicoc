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
        $ticket->prices = $request->prices;
        $ticket->save();
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
        $ticket = Ticket::find($id);
        $ticket->classify = $request->classify;
        $ticket->price = $request->price;
        $ticket->save();
        return Redirect::to('admin/ticket/list');

    }

    public function getDelete(Request $request){

        $ticket = Ticket::find($request->id);
        $ticket->delete();
        return response()->json();
    }
}
