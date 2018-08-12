<?php

namespace shopIlocos;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function users(){
        return $this->belongsTo('shopIlocos\User');
    }

    public function product_category(){
        return $this->belongsTo('shopIlocos\Product_Category');
    }

    public function cart(){
        return $this->belongsTo('shopIlocos\Cart');
    }

    
}
