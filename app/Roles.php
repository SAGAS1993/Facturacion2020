<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'rol';

    protected $fillable = ['Nombre'];
}
