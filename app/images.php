<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    protected $table = 'img_tab';
    protected $fillable = ['product_name','productimg1','productimg2','productimg3'];
}
