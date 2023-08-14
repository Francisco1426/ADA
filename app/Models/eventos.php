<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_evento';
    protected $fillable = ['id_evento','nombre','fecha_evento','hora_evento','lugar_evento','tipo_evento','id_actividad','id_detalle'];
}
