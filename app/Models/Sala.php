<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'sala';
    protected $primaryKey = 'idSala'; 
    public $timestamps = false;

    public function assentos()
    {
        return $this->hasMany('App\Models\Assento','idSala');
    }
}
