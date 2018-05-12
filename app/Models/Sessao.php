<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sessao extends Model
{
    protected $table = 'sessao';
    protected $primaryKey = 'idSessao'; 
    public $timestamps = false;
}
