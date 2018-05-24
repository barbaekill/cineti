<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Sessao extends Model
{
    protected $table = 'sessao';
    protected $primaryKey = 'idSessao'; 
    public $timestamps = false;    

    private $nomeDiaSemana = [
        '0' => 'DOM',
        '1' => 'SEG',
        '2' => 'TER',
        '3' => 'QUA',
        '4' => 'QUI',
        '5' => 'SEX',        
        '6' => 'SAB'
    ];

    public function filme(){
        return $this->hasOne('App\Models\Filme', 'idFilme', 'idFilme');
    }

    public function sala(){
        return $this->hasOne('App\Models\Sala', 'idSala', 'idSala');
    }

    public function horario(){
        return $this->hasOne('App\Models\Horario', 'idHorario', 'idHorario');
    }

    public function assentos(){
        return $this->belongsToMany('App\Models\Assento','assento_sessao','idSessao','idAssento')->withPivot('disponivel');
    }

    public function setDataAttribute($value){
        $data = Carbon::createFromFormat('d/m/Y',$value);        
        $this->attributes['data'] = $data->format('Y-m-d');
    }

    public function getDiaSemanaAttribute(){
        $dataTipada = Carbon::parse($this->data);
        $diaSemana = $dataTipada->dayOfWeek;

        return $dataTipada->format('d/m') . " - " . $this->nomeDiaSemana[$diaSemana];
    }
}
