<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = ['product_id', 'product', 'price', 'unit', 'category', 'sub-category'];

    protected $guarded = 'id';
}