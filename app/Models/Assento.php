<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assento extends Model
{
    protected $table = 'assento';
    protected $primaryKey = 'idAssento'; 
    public $timestamps = false;

    public function sala()
    {
        return $this->belongsTo('App\Models\Sala', 'idSala');
    }

    public function sessoes(){
        return $this->belongsToMany('App\Models\Sessao','assento_sessao','idAssento','idSessao');
    }
}
