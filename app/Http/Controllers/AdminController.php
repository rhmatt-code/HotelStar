<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function show(){
        return view('admin/admin');
    }

    public function actionlogout(){
        Auth::logout();
        return redirect('login');
    }
}
