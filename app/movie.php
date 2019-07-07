<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $table = 'movies';
    protected $fillable = [
    	'id',
    	'movie_code',
    	'name',
    	'img',
    	'describe'
    ];

    
    public $timestamps = false;
}
