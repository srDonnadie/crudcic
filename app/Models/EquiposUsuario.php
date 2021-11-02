<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EquiposUsuario
 *
 * @property $id
 * @property $fecha_entrega
 * @property $estado_entrega
 * @property $ubicacion
 * @property $fecha_devolucion
 * @property $observacion_devolucion
 * @property $cc_id
 * @property $serial_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EquiposUsuario extends Model
{
    
    static $rules = [
		'fecha_entrega' => 'required',
		'estado_entrega' => 'required',
		'ubicacion' => 'required',
		'fecha_devolucion' => 'required',
		'observacion_devolucion' => 'required',
		'cc_id' => 'required',
		'serial_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha_entrega','estado_entrega','ubicacion','fecha_devolucion','observacion_devolucion','cc_id','serial_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'serial', 'serial_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\Usuario', 'cc', 'cc_id');
    }
    

}
