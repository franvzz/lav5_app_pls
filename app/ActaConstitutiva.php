<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ActaConstitutiva extends Model {

  protected $table = 'acta_constitutiva';

  protected $fillable = [
    'year',
    'pdf',
  ];

}
