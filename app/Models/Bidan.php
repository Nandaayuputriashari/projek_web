<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidan extends Model
{
    use HasFactory;
    protected $table = "Bidans";
    var $namaPosyandu;
  
    public function posyandu(){
        return $this->hasOne(Posyandu::class, 'id_posyandu');
    }

}
