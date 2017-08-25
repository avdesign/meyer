<?php

namespace AVDPainel\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ConfigPrice extends Model
{
	protected $fillable = [
        'profile',
	    'percent',
	    'order',
	    'status'
	];

    /**
    * Validação
    * @return array
    **/
    public function rules($id = '')
    {
    	return [
            "profile"  => "required|unique:config_prices,profile,{$id},id",
    		"percent"  => "required",
    		"order"    => "required"
    	];
    }
}