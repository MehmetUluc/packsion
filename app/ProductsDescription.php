<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsDescription extends Model
{
    protected $table = 'products_description';

    protected $primaryKey = false;

    public $timestamp = false;
}
