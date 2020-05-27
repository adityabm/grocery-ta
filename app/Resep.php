<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Resep extends Model
{
    use SoftDeletes;

    protected $table = 'resep';

    public static function boot()
    {
        parent::boot();

        self::creating(function($model){
            $model->user_id = Auth::user()->id;
        });
    }

    public function bahan()
    {
        return $this->belongsToMany('App\BahanMasakan','resep_detail');
    }

    public function getFotoPathAttribute()
    {
        if(!is_array($this->foto)){
            $this->foto = json_decode($this->foto);
        }

        return $this->foto;
    }
}
