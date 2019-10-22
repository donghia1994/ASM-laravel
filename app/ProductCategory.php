<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    //
    protected $table = 'product_categories';
    protected $primaryKey = 'cata_id';
    public $timestamps = false;

    public function products(){
        return $this->hasMany('App\Product','cata_id','cata_id');
    }
}
