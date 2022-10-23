<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Room;

class RoomController extends Controller
{
    public function room(){
        $room = Room::all();

        return view('admin/room/room', compact('room'));
    }

    public function add(){
        return view('admin/room/addroom');
    }

    public function store(Request $request){
        request() -> validate([
            'tiperoom' => ['required', 'string'],
            'jumlahkamar' => ['required', 'string'],
        ]);

        Room::create([
            'tiperoom' => $request ->tiperoom,
            'jumlahkamar' => $request ->jumlahkamar,
        ]);

        return redirect('room');
        
    }
    public function edit($id){
        $room = Room::find($id);

        return view('admin/room/editroom', compact('room'));
    }

    public function update(Request $request, $id){
        $room = Room::find($id);
        $room->tiperoom = $request->tiperoom;
        $room->jumlahkamar = $request->jumlahkamar;
        $room->update();

        return redirect('room');
    }

    public function delete($id){
        Room::find($id)->delete();

        return redirect('room');
    }
    
}
