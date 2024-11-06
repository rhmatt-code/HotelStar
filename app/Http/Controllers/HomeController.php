<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Facilitieshotel;
use App\Models\Facilitiesroom;
use App\Models\reservations;
use App\Models\room;
use App\Models\nameroom;
use Carbon\Carbon;


use PDF;


class HomeController extends Controller
{
    public function home(){
        $facilitieshotel = Facilitieshotel::all();
        $room = room::with('facilitiesroom','nameroom')->get();
        $room_id = room::where('id')->get();
        $nameroom = nameroom::all();

        return view('home', compact('facilitieshotel','room','nameroom'));
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
        $nameroom = nameroom::inRandomOrder()->where('room_id', $request->room_id)->first()->id;
        $reservation = reservations::create([
            'cek_in' => $request ->cek_in,
            'cek_out' => $request ->cek_out,
            'nama_pemesan' => $request ->nama_pemesan,
            'email' => $request ->email,
            'no_handphone' => $request ->no_handphone,
            'nama_tamu' => $request ->nama_tamu,
            'noruangan_id' => $nameroom,
            'status' => false,
        ]);

        $reservation_id = $reservation->id;

        return redirect("summary/$reservation_id");

    }
    public function cetak_pdf($id){
        $reservation = reservations::with('nameroom')->where('id',$id)->first();
        $room = room::find($reservation->nameroom->room_id);
        $check_in = $reservation->cek_in;
        $check_out = $reservation->cek_out;
        $days = (Carbon::parse($check_in))->diff(Carbon::parse($check_out));
        $price = ((int)$reservation->price);
        $day = $days->d;
        if($day < 0){
            $total = $price * 1;
        }elseif($day < 1){
            $total = $price * 1;
        }else{
            $total = $price * $day;
        };

        $pdf = PDF::loadview('summary', compact('reservation','total','room'));
    	return $pdf->download('summary.pdf');
    }

}
