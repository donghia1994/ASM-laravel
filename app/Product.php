<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = false;
    public function productcategory(){
        return $this->belongsTo('App\ProductCategory','cata_id','cata_id');
    }
}
