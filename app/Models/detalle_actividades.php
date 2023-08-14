<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_actividades extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_detalle';
    protected $fillable = ['id_detalle','nombre','descripcion'];
}
