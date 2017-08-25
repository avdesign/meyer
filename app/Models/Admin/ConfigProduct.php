<?php

namespace AVDPainel\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ConfigProduct extends Model
{
	
	protected $fillable = [
	    'cost',
	    'stock',
	    'freight',
	    'kit',
	    'colors',
	   	'group_colors',
	    'positions',
	    'grids',
	    'video',
	    'mini_colors'
	];
}
