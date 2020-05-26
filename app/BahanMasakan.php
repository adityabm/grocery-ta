<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BahanMasakan extends Model
{
    use SoftDeletes;

    protected $table = 'bahan_masakan';
    
    public function toko()
    {
        return $this->belongsToMany('App\Toko','toko_jual');
    }
}
