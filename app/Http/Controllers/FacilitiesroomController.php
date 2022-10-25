<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facilitiesroom;
use Illuminate\Support\Facades\Hash;
use App\Models\Room;

class FacilitiesroomController extends Controller
{
    public function show(){
        $facilitiesroom = facilitiesroom::all();

        return view('admin\facilitiesroom\facilitesroom', compact('facilitiesroom'));
    }

    public function add(){
        $room = Room::all();

        return view('admin/facilitiesroom/add' , compact('room'));
    }

    public function store(Request $request){
        request() -> validate([
            'name' => ['required', 'string'],
            'room_id' => ['required', 'string'],
        ]);

        facilitiesroom::create([
            'name' => $request ->name,
            'room_id' => $request ->room_id,
        ]);

        return redirect('facilitiesroom');
        
    }
    public function edit($id){
        $facilitiesroom = facilitiesroom::find($id);
        $room = Room::all();

        return view('admin/facilitiesroom/edit', compact('facilitiesroom','room'));
    }

    public function update(Request $request, $id){
        $facilitiesroom = facilitiesroom::find($id);
        $facilitiesroom->name = $request->name;
        $facilitiesroom->room_id = $request->room_id;
        $facilitiesroom->update();

        return redirect('facilitiesroom');
    }

    public function delete($id){
        facilitiesroom::find($id)->delete();

        return redirect('facilitiesroom');
    }
}
