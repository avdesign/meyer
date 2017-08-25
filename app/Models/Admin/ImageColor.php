<?php

namespace AVDPainel\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ImageColor extends Model
{
	protected $fillable = [
		'product_id',
        'brand',
        'section',
        'category',
		'code',
		'color',
		'image',
		'slug',
		'html',
        'kit',
        'stock',
        'kit_name',
		'description',				
		'cover',
		'order',
		'active',
		'visits'
	];

    /**
    * Product
    * @return array
    **/
    public function product()
    {
        return $this->belongsTo(Product::class);
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
    * Images Positions
    * @return array
    **/
    public function positions()
    {
        return $this->hasMany(ImagePosition::class);
    }
}
