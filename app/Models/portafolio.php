<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portafolio extends Model
{
    protected $table='portafolios';

    protected $fillable=['nombre','email','asunto','mensaje'];
}
