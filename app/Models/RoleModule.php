<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModule extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function module(){
        return $this->hasOne(Module::class, 'id', 'module_id');
    }

    public function role(){
        return $this->hasOne(Role::class, 'id', 'role_id');
    }
}
