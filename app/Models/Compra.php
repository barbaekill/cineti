<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compra';
    protected $primaryKey = 'idCompra'; 
    public $timestamps = false;

    public function assentos(){
        return $this->belongsToMany('App\Models\Assento','compra_assento','idCompra','idAssento')->withPivot('meia');
    }

    public function sessao(){
        return $this->hasOne('App\Models\Sessao', 'idSessao', 'idSessao');
    }
}
