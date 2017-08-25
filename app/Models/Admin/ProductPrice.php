<?php

namespace AVDPainel\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
	protected $fillable = [
		'product_id',
		'config_price_id',
		'profile',
		'price_card',
		'price_cash',
		'offer_card',
		'offer_cash',
		'price_percent',
		'offer_percent'
	];
}
