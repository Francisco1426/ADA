<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Evento
 *
 * @property $id_evento
 * @property $nombre
 * @property $fecha_evento
 * @property $hora_evento
 * @property $lugar_evento
 * @property $tipo_evento
 * @property $actividad_id
 * @property $detalle_id
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property Actividade $actividade
 * @property DetalleActividade $detalleActividade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Evento extends Model
{
    
    static $rules = [
		'id_evento' => 'required',
		'nombre' => 'required',
		'fecha_evento' => 'required',
		'hora_evento' => 'required',
		'lugar_evento' => 'required',
		'tipo_evento' => 'required',
		'actividad_id' => 'required',
		'detalle_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_evento','nombre','fecha_evento','hora_evento','lugar_evento','tipo_evento','actividad_id','detalle_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function actividade()
    {
        return $this->hasOne('App\Models\Actividade', 'id', 'actividad_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function detalleActividade()
    {
        return $this->hasOne('App\Models\DetalleActividade', 'id', 'detalle_id');
    }
    

}
