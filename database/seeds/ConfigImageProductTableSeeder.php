<?php

use Illuminate\Database\Seeder;
use AVDPainel\Models\Admin\ConfigImageProduct;

class ConfigImageProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ConfigImageProduct::create([
            'type' => 'C',
            'path' => 'assets/imagens/produtos/100x100/',
            'width' => '100',
            'height' => '100',
            'default' => 'T'
        ]);

        ConfigImageProduct::create([
            'type' => 'C',
            'path' => 'assets/imagens/produtos/300x300/',
            'width' => '300',
            'height' => '300',
            'default' => 'N'

        ]);

        ConfigImageProduct::create([
            'type' => 'C',
            'path' => 'assets/imagens/produtos/400x400/',
            'width' => '400',
            'height' => '400',
            'default' => 'M'

        ]);

        ConfigImageProduct::create([
            'type' => 'C',
            'path' => 'assets/imagens/produtos/700x700/',
            'width' => '700',
            'height' => '700',
            'default' => 'G'
        ]);

        ConfigImageProduct::create([
            'type' => 'C',
            'path' => 'assets/imagens/produtos/900x900/',
            'width' => '900',
            'height' => '900',
            'default' => 'Z'
        ]);


        ConfigImageProduct::create([
            'type' => 'P',
            'path' => 'assets/imagens/produtos/300x300/',
            'width' => '300',
            'height' => '300',
            'default' => 'N'

        ]);

        ConfigImageProduct::create([
            'type' => 'P',
            'path' => 'assets/imagens/produtos/700x700/',
            'width' => '700',
            'height' => '700',
            'default' => 'G'
        ]);

        ConfigImageProduct::create([
            'type' => 'P',
            'path' => 'assets/imagens/produtos/900x900/',
            'width' => '900',
            'height' => '900',
            'default' => 'Z'
        ]);


    }
}
