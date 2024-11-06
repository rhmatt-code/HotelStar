<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\nameroom;

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
        'noruangan_id',
        'status',
    ];
    protected $table = "reservations";

    public function nameroom()
    {
        return $this->belongsTo(nameroom::class, 'noruangan_id');
    }


}
