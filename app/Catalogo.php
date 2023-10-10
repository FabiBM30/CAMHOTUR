<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Catalogo
 *
 * @property $idCatalogos
 * @property $nombreCatalogos
 * @property $id_Empre
 * @property $cantidad
 * @property $estado
 * @property $foto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Catalogo extends Model
{
  protected $primaryKey = 'idCatalogos';
    static $rules = [
		
		'nombreCatalogos' => 'required',
		'id_Empre' => 'required',
		'cantidad' => 'required',
		'estado' => 'required',
		'foto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCatalogos','nombreCatalogos','id_Empre','cantidad','estado','foto'];

// En el modelo Emprendimiento
// En el modelo Catalogo
public function emprendimiento()
{
    return $this->belongsTo(Emprendimiento::class, 'id_Empre');
}



}
