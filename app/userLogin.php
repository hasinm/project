<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userLogin extends Model
{
    protected $table = 'user_login';
        protected $fillable = ['username','password'];
}
