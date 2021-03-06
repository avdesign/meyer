<?php

namespace 	AVD\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class ConfigProduct extends Model
{
	
	protected $fillable = [
		'view_prices',
	    'price_profile',
	    'cost',
	    'stock',
	    'freight',
	    'kit',
	   	'colors',
	    'group_colors',
	    'positions',
	    'grids',
	    'reviews',
	    'quickview',
	    'wishlist',
	    'compare',
	    'countdown',
	    'video',
	    'mini_colors'
	];
}