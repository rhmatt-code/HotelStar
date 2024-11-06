<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\facilitiesroom;
use App\Models\nameroom;
use App\Models\reservations;

class room extends Model
{
    use HasFactory;
    protected $fillable = [
        'tiperoom',
        'jumlah_orang',
        'image',
        'price',
    ];
    protected $table = "rooms";

    public function facilitiesroom()
    {
        return $this->hasMany(facilitiesroom::class);
    }

    public function nameroom()
    {
        return $this->hasMany(nameroom::class);
    }
}
