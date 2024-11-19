<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    //la relacion de 1:1   Persona (id_documento)-> Persona
    use HasFactory;
    public function persona(){
        return $this->hasOne(Persona::class);
    }
}
