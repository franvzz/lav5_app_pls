<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Espacios extends Model {

  protected $table = 'espacios';

  protected $fillable = [
    'propietario_id',
    'num_local',
    'id_comercial',
    'isla',
    'tipo_de_espacio',
    'escritura',
    'm2',
    'proindiviso',
    'expediente',
    'num_registro',
    'volumen',
    'libro',
    'fecha_registro',
    'comentarios',
    'estatus',
  ];

  # -- belongs_to
	public function Propietario() {
		return $this->belongsTo('App\Propietario');
	}

}
