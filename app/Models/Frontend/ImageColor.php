<?php

namespace AVD\Models\Frontend;

use Illuminate\Database\Eloquent\Model;

class ImageColor extends Model
{
    /**
    * Images Positions
    * @return array
    **/
    public function positions()
    {
        return $this->hasMany(ImagePosition::class);
    }
}
