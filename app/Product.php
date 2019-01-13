<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'products_id';
    


    public function desc()
    {
    	return $this->hasOne('App\ProductsDescription', 'products_id', 'products_id');
    }

    public $timestamp = false;
}
