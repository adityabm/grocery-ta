<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Auth;

class Resep extends Model
{
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
}
