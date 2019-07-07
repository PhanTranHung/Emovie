<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class find_user extends Model
{
    protected $table = 'admins';
    protected $fillable = [
    	'account',
    	'password',
    	'age',
    	'id',
    	'code',
    	'full_name'
    ];

    
    public $timestamps = false;
}
