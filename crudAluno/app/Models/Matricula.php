<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matricula';
    public $timestamps = false;
    public $fillable= [
        'id_curso',
        'id_aluno',
        'id_instrutor',
        'data_matricula',
        'nota1',
        'nota2',
        'data_certificacao',
        'id_certificacao'
    ];
}
