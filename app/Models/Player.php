<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['photo','name','position','age','height','country_id'];

    public function country(){
        return $this->belongsTo(Country::class, 'country_id');
    }
}
