<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
   protected $fillable = [

        'id', 'nama', 'rayon', 'rombel'

    ];
}
