<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    use HasFactory;
    //relacion de   Persona (id_documento) -> Documento
    public function documento(){
        return $this->belongsTo(Documento::class);
    } 

    public function proveedore(){
            // Persona ->Proveedore(id_persona)
        return $this->hasOne(Proveedore::class);
    }
}
