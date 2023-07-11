<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    public function registrorespuestas(){
        return $this->hasOne(RegistroRespuesta::class, 'id_respuesta');
    }
}
