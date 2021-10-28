<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingSeat extends Model
{
    use HasFactory;

    public function seat(){
        return $this->hasOne(Seat::class, 'id', 'seat_id');
    }

    public function event(){
        return $this->hasOne(Event::class, 'id', 'event_id');
    }
}
