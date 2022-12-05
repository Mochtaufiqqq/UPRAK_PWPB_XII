<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['photo_country','name_country'];

    public function player (){
        return $this->hasMany(Player::class, 'country_id');
    }
}
