<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nome Aluno',
        'Data de Nascimento', 
        'CPF',
        'RG',
        'Nacionalidade',
        'Email', 
        'Endereço', 
        'Complemento', 
        'Cidade', 
        'Estado', 
        'CEP',
        'Sexo', 
        'Estado Civil',
        'Ingressão', 
        'Período', 
        'Conclusão Ensino Medio',
        'Telefone',
        'Celular'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        /*
        'weight' => 'int',
        'height' => 'float',*/
    ];
}