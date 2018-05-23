<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horario';
    protected $primaryKey = 'idHorario'; 
    public $timestamps = false;

    public function getHorarioFormatadoAttribute(){
        return sprintf('%02d',$this->hora) . ":" . sprintf('%02d',$this->minuto);
    }
}
