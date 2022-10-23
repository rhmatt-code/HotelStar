<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResepsionisController extends Controller
{
    public function show(){
        return view('resepsionis/resepsionis');
    }
}
