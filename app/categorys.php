<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorys extends Model
{
    protected $table = 'categorys';
    protected $fillable = [
    	'code',
    	'name',
    	'alias'
    ];

    
    public $timestamps = false;
}
