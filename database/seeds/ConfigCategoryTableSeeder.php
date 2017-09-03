<?php

use Illuminate\Database\Seeder;
use AVDPainel\Models\Admin\ConfigCategory;

class ConfigCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');

        ConfigCategory::create([
            'grids' => 1,
            'description' => 1,
            'img_default' => 'D',
            'path' => 'assets/imagens/categorias/',
            'img_featured' => 1,
            'width_featured' => 400,
            'height_featured' => 400,
            'img_banner' => 1,
            'width_banner' => 1900,
            'height_banner' => 350,
            'width_modal' => 400,
            'height_modal' => 500,
            'created_at' => $date
        ]);
    }
}