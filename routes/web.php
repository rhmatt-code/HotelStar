<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\FacilitiesroomController;
use App\Http\Controllers\FacilitieshotelController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('home', 'home');
    Route::post('storeorder','store')->name('storeorder');

});
Route::controller(AdminController::class)->group(function () {
    Route::get('admin', 'show');
    route::get('actionlogout','actionlogout')->name('actionlogout');
});

Route::controller(FacilitieshotelController::class)->group(function () {
    Route::get('facilitieshotel', 'show')->name('facilitieshotel');
    Route::get('facilitieshotel/add', 'add')->name('addfacilitieshotel');
    Route::post('facilitieshotel/store','store')->name('storefacilitieshotel');
    Route::get('facilitieshotel/edit/{id}', 'edit')->name('editfacilitieshotel');
    Route::post('facilitieshotel/update/{id}', 'update')->name('updatefacilitieshotel');
    Route::get('facilitieshotel/delete/{id}','delete')->name('deletefacilitieshotel');
});
Route::controller(FacilitiesroomController::class)->group(function () {
    Route::get('facilitiesroom', 'show')->name('facilitiesroom');
    Route::get('addfacilitiesroom', 'add')->name('addfacilitiesroom');
    Route::post('storefacilitiesroom','store')->name('storefacilitiesroom');
    Route::get('facilitiesroom/edit/{id}', 'edit')->name('editfacilitiesroom');
    Route::post('facilitiesroom/update/{id}', 'update')->name('updatefacilitiesroom');
    Route::get('facilitiesroom/delete/{id}','delete')->name('deletefacilitiesroom');
});

Route::controller(RoomController::class)->group(function () {
    Route::get('room', 'room')->name('room');
    Route::get('add', 'add')->name('addroom');
    Route::post('room/store','store')->name('storeroom');
    Route::get('room/edit/{id}', 'edit')->name('edit');
    Route::post('room/update/{id}', 'update')->name('update');
    Route::get('room/delete/{id}','delete')->name('delete');
});

Route::controller(ResepsionisController::class)->group(function () {
    Route::get('resepsionis', 'show')->name('resepsionis');
    Route::get('resepsionis/checkin/{id}', 'check_in')->name('checkinresepsionis');
});

Route::middleware(['guest'])->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'login');
        Route::post('store', 'store');
    });
    Route::controller(RegisterController::class)->group(function () {
        Route::get('register', 'register');
        Route::post('register', 'store');
    });
    
});
