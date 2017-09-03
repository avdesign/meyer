<?php

namespace AVDPainel\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use AVDPainel\Models\Admin\Category;

class GridCategory extends Model
{

	protected $fillable = [
		'category_id',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}