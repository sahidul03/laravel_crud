<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = ['title', 'details', 'price', 'discount', 'photo'];
}
