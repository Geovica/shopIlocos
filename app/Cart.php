<?php

namespace shopIlocos;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    public function products()

    {

        $this->hasMany('shopIlocos\Products', 'product_id');
    }

    public function users(){
        $this->hasMany('shopIlocos\Users', 'user_id');
    }
}
