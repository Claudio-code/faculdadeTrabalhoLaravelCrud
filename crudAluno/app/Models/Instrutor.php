<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrutor extends Model
{
    protected $table = 'instrutor';
    public $timestamps = false;
    public $fillable = [
        'nome_instrutor',
        'data_nacimento',
        'cpf',
        'rg',
        'fone_celular',
        'email_aluno',
        'mini_curiculo'
    ];
}
