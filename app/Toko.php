<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;
use Illuminate\Database\Eloquent\SoftDeletes;

class Toko extends Model
{
    use Spatial, Softdeletes;
    protected $table = 'toko';
    
}
