<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'filme';
    protected $primaryKey = 'idFilme'; 
    public $timestamps = false;
}
