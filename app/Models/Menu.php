<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $timestamps = false;

    public static function getUserMenu()
    {
        return self::with(['children','parent'])->get();
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->hasOne(self::class, 'id', 'parent_id');
    }
}
