<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sala extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'sala';
    protected $primaryKey = 'idSala'; 
    public $timestamps = false;

    public function assentos()
    {
        return $this->hasMany('App\Models\Assento','idSala');
    }
}
