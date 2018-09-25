<?php

namespace Kiendo\Mypackage;

use Illuminate\Database\Eloquent\Model;

class Mypackage extends Model
{
    protected $table = 'teams';
    protected $fillable = [
    	'name', 'description', 'logo', 'leader_id'
    ];
}
