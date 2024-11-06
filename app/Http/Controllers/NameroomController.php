<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nameroom;
use App\Models\Room;

class NameroomController extends Controller
{
    public function show(){
        $nameroom = nameroom::All();
        $room = room::all();
        return view('admin/nameroom/nameroom', compact('nameroom', 'room'));
    }

    public function add(){
        $room = room::all();
        return view('admin/nameroom/add', compact('room'));
    }

    public function store(Request $request){
        request() -> validate([
            'nama_ruangan' => ['required', 'string'],
        ]);

        nameroom::create([
            'nama_ruangan' => $request ->nama_ruangan,
            'room_id' => $request->room_id

        ]);

        return redirect('nameroom');

    }

    public function edit($id){
        $room = nameroom::find($id);

        return view('admin/name_room/edit', compact('room'));
    }

    public function update(Request $request, $id){
        $room = nameroom::find($id);
        $room->name_room = $request->name_room;
        $room->update();

        return redirect('admin/name_room');
    }

    public function delete($id){
        nameroom::find($id)->delete();

        return redirect('admin/name_room');
    }
}
