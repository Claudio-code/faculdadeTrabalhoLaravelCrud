<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome_curso', 'carga_horaria', 'ementa_curso'];
}
