<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cargo
 *
 * @property $id
 * @property $puesto
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado[] $empleados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cargo extends Model
{
    
    static $rules = [
		'puesto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['puesto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleados()
    {
        return $this->hasMany('App\Models\Empleado', 'cargos_id', 'id');
    }
    

}
