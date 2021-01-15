<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'usercart';
        protected $fillable = ['user_name','product_name','product_price'];
}
