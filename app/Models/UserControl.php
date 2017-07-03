<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserControl extends Model
{
	
	use SoftDeletes;
    public $timestamps = false;
    protected $table = "users_control";
	protected $dates = ['deleted_at'];
}
