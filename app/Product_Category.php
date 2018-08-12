<?php

namespace shopIlocos;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    //
    protected $table = 'product_categories';

    public function product() {
    return $this->hasMany('shopIlocos\Product', 'category_id');
    }

}
