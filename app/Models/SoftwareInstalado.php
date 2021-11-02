<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SoftwareInstalado
 *
 * @property $id
 * @property $tipo_software
 * @property $nombre_software
 * @property $version_software
 * @property $fecha_instalacion
 * @property $serial_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SoftwareInstalado extends Model
{
    
    static $rules = [
		'tipo_software' => 'required',
		'nombre_software' => 'required',
		'version_software' => 'required',
		'fecha_instalacion' => 'required',
		'serial_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_software','nombre_software','version_software','fecha_instalacion','serial_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'serial', 'serial_id');
    }
    

}
