<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\room;

class facilitiesroom extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'room_id',
    ];
    protected $table = "facilitiesrooms";
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
