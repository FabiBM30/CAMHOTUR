<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cliente
 *
 * @property $idCliente
 * @property $nombreCliente
 * @property $apellidoCliente
 * @property $generoCliente
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
  protected $primaryKey = 'idCliente'; //esto era lo que le faltaba
    static $rules = [
		//'idCliente' => 'required',
		'nombreCliente' => 'required',
		'apellidoCliente' => 'required',
		'generoCliente' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCliente','nombreCliente','apellidoCliente','generoCliente'];



}
