<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;


class Admin extends Authenticable
{
    use Notifiable;
    
    protected $table = 'admins';
    protected $guarded = array();
    
    public function role(){
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    public function parent()
    {
        return $this->hasOne(self::class, 'id', 'parent_id');
    }
}
