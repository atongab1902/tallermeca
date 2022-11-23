<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $Cedula
 * @property $Nombre
 * @property $cargos_id
 * @property $Horario
 * @property $created_at
 * @property $updated_at
 *
 * @property Cargo $cargo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'Cedula' => 'required',
		'Nombre' => 'required',
		'cargos_id' => 'required',
		'Horario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Cedula','Nombre','cargos_id','Horario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cargo()
    {
        return $this->hasOne('App\Models\Cargo', 'id', 'cargos_id');
    }
    

}
