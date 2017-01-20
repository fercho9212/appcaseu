<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionality extends Model
{
    //
    protected $table='funcionalities';
    protected $fillable=['description','requirement_id'];

    
    public function requirement(){
      return $this->belongsTo('App\Models\requirement');
    }
}
