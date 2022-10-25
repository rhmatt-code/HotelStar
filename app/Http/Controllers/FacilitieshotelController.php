<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facilitieshotel;

class FacilitieshotelController extends Controller
{
    public function show(){
        $facilitieshotel = facilitieshotel::all();

        return view('admin\facilitieshotel\facilitieshotel', compact('facilitieshotel'));
    }

    public function add(){
        return view('admin\facilitieshotel\add');
    }

    public function store(Request $request){
        request() -> validate([
            'name' => ['required', 'string'],
            'keterangan' => ['required', 'string'],
        ]);
        $request->image->store('facilitieshotel','public');
        facilitieshotel::create([
            'name' => $request ->name,
            'image' => $request->image->hashName(),
            'keterangan' => $request ->keterangan,
        ]);

        return redirect('facilitieshotel');
        
    }
    public function edit($id){
        $facilitieshotel = facilitieshotel::find($id);

        return view('admin/facilitieshotel/edit', compact('facilitieshotel'));
    }

    public function update(Request $request, $id){
        $facilitieshotel = facilitieshotel::find($id);
        $facilitieshotel->name = $request->name;
        $facilitieshotel->keterangan = $request->keterangan;
        $facilitieshotel->image = $request->image;
        $facilitieshotel->update();

        return redirect('facilitieshotel');
    }

    public function delete($id){
        facilitieshotel::find($id)->delete();

        return redirect('facilitiesroom');
    }
}
