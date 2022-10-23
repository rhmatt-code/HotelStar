<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\facilitiesroom;

class room extends Model
{
    use HasFactory;
    protected $fillable = [
        'tiperoom',
        'jumlahkamar',
    ];
    protected $table = "rooms";

    public function facilitiesroom()
    {
        return $this->belongsTo(facilitiesroom::class);
    }
}
