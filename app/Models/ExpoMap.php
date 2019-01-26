<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpoMap extends Model
{
    protected $fillable =['id', 'image'];
    protected $table ='expo_maps';
}
