<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asistencia
 *
 * @property $id
 * @property $Cedula
 * @property $Nombre
 * @property $fecha
 * @property $asistenciaentrada
 * @property $asistenciasalida
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asistencia extends Model
{
    
    static $rules = [
		'Cedula' => 'required',
		'Nombre' => 'required',
		'fecha' => 'required',
		'asistenciaentrada' => 'required',
		'asistenciasalida' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Cedula','Nombre','fecha','asistenciaentrada','asistenciasalida'];



}
