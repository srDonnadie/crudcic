<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Accesorio
 *
 * @property $id
 * @property $accesorios_computo
 * @property $cables_extras
 * @property $extras
 * @property $serial_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Equipo $equipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Accesorio extends Model
{
    
    static $rules = [
		'accesorios_computo' => 'required',
		'cables_extras' => 'required',
		'extras' => 'required',
		'serial_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['accesorios_computo','cables_extras','extras','serial_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo', 'serial', 'serial_id');
    }
    

}
