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
        return $this->belongsTo('App\Sala', 'idSala');
    }
}
