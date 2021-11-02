<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mantenimiento
 *
 * @property $id
 * @property $fecha_mantenimiento
 * @property $estado_mantenimiento
 * @property $tipo_mantenimiento
 * @property $realizado_por
 * @property $observaciones_mantenimiento
 * @property $serial_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mantenimiento extends Model
{
    
    static $rules = [
		'fecha_mantenimiento' => 'required',
		'estado_mantenimiento' => 'required',
		'tipo_mantenimiento' => 'required',
		'realizado_por' => 'required',
		'observaciones_mantenimiento' => 'required',
		'serial_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_mantenimiento','estado_mantenimiento','tipo_mantenimiento','realizado_por','observaciones_mantenimiento','serial_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'serial', 'serial_id');
    }
    

}
