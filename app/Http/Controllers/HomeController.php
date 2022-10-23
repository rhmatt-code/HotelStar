<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Facilitieshotel;
use App\Models\Facilitiesroom;
use App\Models\room;


class HomeController extends Controller
{
    public function home(){
        $facilitieshotel = Facilitieshotel::all();
        $facilitiesroom = facilitiesroom::with("room")->get();

        return view('home', compact('facilitieshotel','facilitiesroom'));
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('home');
    }
}
