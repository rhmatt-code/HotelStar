<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Facilitieshotel;
use App\Models\Facilitiesroom;
use App\Models\reservations;
use App\Models\room;
use PDF;


class HomeController extends Controller
{
    public function home(){
        $facilitieshotel = Facilitieshotel::all();
        $room = room::with('facilitiesroom')->get();
        $room_id = room::where('id')->get();

        return view('home', compact('facilitieshotel','room'));
    }

    public function store(Request $request){
        request()->validate([
            'cek_in' => ['required', 'date'],
            'cek_out' => ['required', 'date'],
            'nama_pemesan' => ['required', 'string'],
            'email' => ['required', 'string'],
            'no_handphone' => ['required', 'string'],
            'nama_tamu' => ['required', 'string'],
            'room_id' => ['required', 'string'],
        ]);

        reservations::create([
            'cek_in' => $request ->cek_in,
            'cek_out' => $request ->cek_out,
            'nama_pemesan' => $request ->nama_pemesan,
            'email' => $request ->email,
            'no_handphone' => $request ->no_handphone,
            'nama_tamu' => $request ->nama_tamu,
            'room_id' => $request ->room_id,
            'status' => false,
        ]);

        return redirect('home');
    }

    
}
