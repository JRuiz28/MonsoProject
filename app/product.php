<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name', 'description', 'stock', 'price', 'image_path',
    ];

}
