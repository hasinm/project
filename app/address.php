<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $table = 'address';
        protected $fillable = ['name','address1','address2','pincode'];
}
