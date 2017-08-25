<?php

namespace AVDPainel\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use AVDPainel\Models\Admin\Brand;

class GridBrand extends Model
{
	protected $fillable = [
		'brand_id',
		'name',
		'label'
	];

    /**
    * @return array
    **/
    public function rules($id = '')
    {
        return [
            "name"  => "required",
            "label" => "required"
        ];
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }


}