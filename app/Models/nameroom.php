<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
use App\Models\reservations;

class nameroom extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_ruangan',
        'room_id',
    ];
    protected $table = "namerooms";

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function reservations()
    {
        return $this->hasMany(reservations::class);
    }
}
