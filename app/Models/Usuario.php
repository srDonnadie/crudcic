<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

/**
 * Class Usuario
 *
 * @property $id
 * @property $cc
 * @property $primer_nombre
 * @property $segundo_nombre
 * @property $apellido_paterno
 * @property $apellido_materno
 * @property $correo
 * @property $cargo
 * @property $created_at
 * @property $updated_at
 *
 * @property EquiposUsuario[] $equiposUsuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
  
    static $rules = [
		'cc' => 'required',
		'primer_nombre' => 'required',
		'segundo_nombre' => 'required',
		'apellido_paterno' => 'required',
		'apellido_materno' => 'required',
		'correo' => 'required',
		'cargo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cc','primer_nombre','segundo_nombre','apellido_paterno','apellido_materno','correo','cargo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equiposUsuarios()
    {
        return $this->hasMany('App\Models\EquiposUsuario', 'cc_id', 'cc');
    }
    
}
