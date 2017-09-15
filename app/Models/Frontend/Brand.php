<?php

namespace AVD\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
    * Images
    * @return array
    **/
    public function images()
    {
        return $this->hasMany(ImageBrand::class);
    }

    /**
    * Products
    * @return array
    **/
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
