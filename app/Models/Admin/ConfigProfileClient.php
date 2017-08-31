<?php

namespace AVDPainel\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ConfigProfileClient extends Model
{
	protected $fillable = [
        'order',
        'profile',
	    'percent_cash',
        'percent_card',
        'sum',
	    'status'
	];

    /**
    * Validação
    * @return array
    **/
    public function rules($id = '')
    {
    	return [
            "order"    => "required",
            "profile"  => "required|unique:config_profile_clients,profile,{$id},id",
    		"percent_cash"  => "required",
            "percent_card"  => "required"
    	];
    }
}