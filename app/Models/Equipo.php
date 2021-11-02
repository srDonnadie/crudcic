<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

/**
 * Class Equipo
 *
 * @property $id
 * @property $serial
 * @property $marca
 * @property $tipo_equipo
 * @property $codigo_interno
 * @property $referencia
 * @property $created_at
 * @property $updated_at
 *
 * @property Accesorio[] $accesorios
 * @property EquiposUsuario[] $equiposUsuarios
 * @property Mantenimiento[] $mantenimientos
 * @property SoftwareInstalado[] $softwareInstalados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Equipo extends Model
{
    
    static $rules = [
		'serial' => 'required',
		'marca' => 'required',
		'tipo_equipo' => 'required',
		'codigo_interno' => 'required',
		'referencia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['serial','marca','tipo_equipo','codigo_interno','referencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accesorios()
    {
        return $this->hasMany('App\Models\Accesorio', 'serial_id', 'serial');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equiposUsuarios()
    {
        return $this->hasMany('App\Models\EquiposUsuario', 'serial_id', 'serial');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mantenimientos()
    {
        return $this->hasMany('App\Models\Mantenimiento', 'serial_id', 'serial');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function softwareInstalados()
    {
        return $this->hasMany('App\Models\SoftwareInstalado', 'serial_id', 'serial');
    }
    

}
