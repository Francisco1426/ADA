<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividades extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_actividad';
    protected $fillable = ['id_actividad','nombre','descripcion'];
}
