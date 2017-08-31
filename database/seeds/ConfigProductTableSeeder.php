<?php

use Illuminate\Database\Seeder;
use AVDPainel\Models\Admin\ConfigProduct;

class ConfigProductTableSeeder extends Seeder
{
    /**
     * Config Product.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');
        ConfigProduct::create([
            'price_profile' => 1,
	        'cost' => 0,
	        'stock' => 0,
	        'freight' => 0,
	        'kit' => 1,
	        'colors' => 1,
	       	'group_colors' => 1,
	        'positions' => 1,
	        'grids' => 1,
            'reviews' => 1,
            'quickview' => 1,
            'wishlist' => 1,
            'compare' => 1,
            'countdown' => 1,
	        'video' => 0,
	        'mini_colors' => 'hexa',
            'created_at' => $date
        ]);
    }
}
