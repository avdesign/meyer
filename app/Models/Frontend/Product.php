<?php

namespace AVD\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
    * Prices
    * @return array
    **/
    public function prices()
    {
        return $this->hasMany(ProductPrice::class);
    }
    /**
    * Images
    * @return array
    **/
    public function images()
    {
        return $this->hasMany(ImageColor::class);
    }
    /**
    * Grids
    * @return array
    **/
    public function grids()
    {
        return $this->hasMany(GridProduct::class);
    }

    /**
    * Brands
    * @return array
    **/
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
