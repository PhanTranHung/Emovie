<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moca extends Model
{
    protected $table = 'movie_categorys';
    protected $fillable = [
    	'id',
    	'movie_code',
    	'category_code'
    ];

    
    public $timestamps = false;
}
