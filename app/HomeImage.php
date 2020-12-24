<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeImage extends Model
{
    protected $table = 'home_page_images';
    protected $fillable = [
        'image_location' , 'image_name' , 'image'
    ];
}
