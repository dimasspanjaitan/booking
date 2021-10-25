<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function SeatGrup(){
        return $this->hasOne(SeatGrup::class, 'id', 'seat_grup_id');
    }
}
