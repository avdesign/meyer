<?php

use AVDPainel\Models\Admin\ConfigPrice;

use Illuminate\Database\Seeder;

class ConfigPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $date = date('Y-m-d H:i:s');

        ConfigPrice::create([
            'profile' => 'Fisica',
            'percent' => 5,
            'order' => '01',
            'status' => 'Ativo',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        ConfigPrice::create([
            'profile' => 'Juridica',
            'percent' => 10,
            'order' => '02',
            'status' => 'Ativo',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        ConfigPrice::create([
            'profile' => 'Vip',
            'percent' => 15,
            'order' => '03',
            'status' => 'Ativo',
            'created_at' => $date,
            'updated_at' => $date
        ]);

    }
}
