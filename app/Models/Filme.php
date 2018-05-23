<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filme';
    protected $primaryKey = 'idFilme'; 
    protected $fillable = ['nome','nomeOriginal','anoLancamento','diretor','sinopse','tipo','classificacao','duracaoMinutos','idFilme'];
    protected $guarded = ['cartazImgPath','headerImgPath'];
    public $timestamps = false;


    private $classificaoString = [
        '0' => 'Livre',
        '10' => 'Não recomendado para menores de dez anos',
        '12' => 'Não recomendado para menores de doze anos',
        '14' => 'Não recomendado para menores de catorze anos',
        '16' => 'Não recomendado para menores de dezesseis anos',
        '18' => 'Não recomendado para menores de dezoito anos',
    ];

    public function getClassificacaoAttribute($value){
        return $this->classificaoString[$value];
    }

    public function sessoes()
    {
        return $this->hasMany('App\Models\Sessao', 'idFilme', 'idFilme');
    }
}
