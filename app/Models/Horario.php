<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Horario extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'horario';
    protected $primaryKey = 'idHorario'; 
    public $timestamps = false;

    public function getHorarioFormatadoAttribute(){
        return sprintf('%02d',$this->hora) . ":" . sprintf('%02d',$this->minuto);
    }
}
