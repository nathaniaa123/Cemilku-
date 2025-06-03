<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Decoration extends Model
{
    protected $fillable = ['name', 'price', 'stock', 'image'];
}

