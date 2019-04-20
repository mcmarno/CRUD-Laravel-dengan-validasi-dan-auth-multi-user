<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = "program_studi";
    protected $primaryKey = 'prodiKode';
    public $timestamps = false;
}
