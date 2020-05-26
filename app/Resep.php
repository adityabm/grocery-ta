<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Resep extends Model
{
    use SoftDeletes;
    
    protected $table = 'resep';

    protected $casts = [
        'foto' => 'array',
    ];

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
}
