<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'image' => ['required'],
        ]);
        $request->image->store('room','public');
        Room::create([
            'tiperoom' => $request ->tiperoom,
            'jumlahkamar' => $request ->jumlahkamar,
            'image' => $request->image->hashName(),
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
         if (isset($request['image'])){
            $img = $request->file('img');
            $img ->move(public_path() . '/images/' . $id . '.jpg');

            $room->image_path = $id . '.jpg';
        }
        $room->update();

        return redirect('room');
    }

    public function delete($id){
        Room::find($id)->delete();

        return redirect('room');
    }
    
}
