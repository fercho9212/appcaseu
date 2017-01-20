<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    //
    protected $table='requirements';
    protected $fillable=['description'];

    public function requirements(){
      return $this->hasMany('App\Models\funcionality');
    }
}
