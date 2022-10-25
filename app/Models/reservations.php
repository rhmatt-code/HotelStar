<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    use HasFactory;
    protected $fillable = [
        'cek_in',
        'cek_out',
        'nama_pemesan',
        'email',
        'no_handphone',
        'nama_tamu',
        'room_id',
        'status',
    ];
    protected $table = "reservations";
}
