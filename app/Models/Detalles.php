<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalle
 *
 * @property $id
 * @property $id_usuario
 * @property $id_venta
 * @property $fecha
 * @property $cantidad
 * @property $subtotal
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Detalles extends Model
{
  use HasFactory;
    static $rules = [
		'fecha' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','id_venta','fecha','cantidad','subtotal'];



}
