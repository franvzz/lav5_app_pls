<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model {

	protected $table = 'propietarios';

  protected $fillable = [
    'nombre',
    'contacto',
    'telefono',
    'celular',
    'correo',
    'direccion',
    'estatus',
  ];

	# -- has_many
	public function Espacios() {
		return $this->hasMany('App\Espacios');
	}

}
