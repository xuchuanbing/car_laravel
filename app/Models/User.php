<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
	public $timestamps = false;
    protected $table = "users";
	protected $dates = ['delete_at'];
}
