<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $fillable = [
        'titleLocation' , 'firstTitle' , 'secondTitle' , 'description'
    ];
}
