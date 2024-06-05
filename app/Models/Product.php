<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['product_id', 'product', 'price', 'unit', 'category', 'sub-category'];

    protected $guarded = 'id';
}
