<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\reservations;

class ResepsionisController extends Controller
{
    public function show(request $request){
            $reservation = reservations::all();

        $searchArray = [];
        if ($request->date){
            $searchArray["cek_in"] = $request->date;
        }
        if ($searchArray != []){
            $filteredreservations = reservations::where($searchArray)->get();
            
        }
        else{
            $filteredreservations = reservations::all();
        }

        
        return view('resepsionis/resepsionis', compact('reservation','filteredreservations', 'searchArray'));
    }

    public function check_in($id)
    {
        $r = reservations::find($id);
        $r->status = 1;
        $r->update();

        return redirect('resepsionis');
    }
    
    public function actionlogout(){
        Auth::logout();
        return redirect('login');
    }
}
