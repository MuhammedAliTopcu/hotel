<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Room;

class RoomController extends Controller
{
    //
    private $room;
    public function  __construct(){
        $room=new Room;
    }
    public function save(Request $request)
    {
        if(!$request->isMethod('post')) return;
        if(!isset($room))   $room =new Room();
        $room->name=$request->input('name');
        $room->type=$request->input('type');
        $room->floor=$request->input('floor');
        $room->save();
        return redirect('/room/list');

    }

    public function list(){
        if(!isset($room))   $room =new Room();
        $data=[];
        $data['rooms']=$room->all();
        return view('/room/list',$data);
    }

    public function show($id){
        $id=$id??'0';
        if(!isset($room))   $room =new Room();

       $selected= $room->find($id);
        $data=[];
        $data['selected']=$selected;
        return view('/room/form',$data);
    }

    public function edit(Request $request){
        $room= new Room;
        $id=$request->input('id');
        $room=Room::find($id);

    
        $room->name=$request->input('name');
        $room->type=$request->input('type');
        $room->floor=$request->input('floor');
        $room->save();
              return redirect('/room/list');

    }
    public function delete($id){
        $room = Room::find($id);
        $room->delete();
        return redirect('/room/list');
        
    }
    

}
