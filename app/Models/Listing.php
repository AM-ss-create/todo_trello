<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany('App\Models\listing');
    }

    //hasMany設定
    public function cards()
    {
        return $this->hasMany('App\Card');
    }
}
