<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facilitieshotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'keterangan',
        'image',
    ];
    protected $table = "facilitieshotels";
}
