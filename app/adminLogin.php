<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adminLogin extends Model
{
    protected $table = 'admin_login';
        protected $fillable = ['username','password'];
}
