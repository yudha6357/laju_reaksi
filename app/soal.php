<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    protected $table="soal";
    protected $primaryKey="id";
    protected $fillable=['soal','A','B','C','D','E'];
}
