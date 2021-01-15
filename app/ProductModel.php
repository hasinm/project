<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products';
        protected $fillable = ['s_categoryName','product_name','product_image','product_price'];
}
