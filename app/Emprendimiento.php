<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Emprendimiento
 *
 * @property $idEmprendimiento
 * @property $nombreEmprendimiento
 * @property $descripcionEmprendimiento
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Emprendimiento extends Model
{
  protected $primaryKey = 'idEmprendimiento';
    static $rules = [
		'id_Distrito' => 'required',
		'nombreEmprendimiento' => 'required',
    'tipo_emprendimiento' => 'required',
		'descripcionEmprendimiento' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    
    protected $fillable = ['idEmprendimiento', 'id_Distrito', 'nombreEmprendimiento', 'descripcionEmprendimiento', 'tipo_emprendimiento'];

    public function distrito()
    {
        return $this->hasOne('App\Distrito', 'id', 'id_Distrito');
    }


public function catalogos()
{
    return $this->hasMany(Catalogo::class, 'id_Empre');
}


}
