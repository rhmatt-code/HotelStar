<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservations;

class ResepsionisController extends Controller
{
    public function show(){
        $reservation = reservations::all();
        return view('resepsionis/resepsionis', compact('reservation'));
    }

    public function check_in($id)
    {
        $r = reservations::find($id);
        $r->status = 1;
        $r->update();

        return redirect('resepsionis');
    }
}
