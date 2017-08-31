<?php

use Illuminate\Database\Seeder;
use AVDPainel\Models\Admin\ConfigProfileClient;


class ConfigProfileClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');

        ConfigProfileClient::create([
            'order' => '01',
            'profile' => 'Fisíca',
            'percent_cash' => 10,
            'percent_card' => 5,
            'sum' => '-',
            'status' => 'Ativo',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        ConfigProfileClient::create([
            'order' => '02',
            'profile' => 'Juridica',
            'percent_cash' => 15,
            'percent_card' => 10,
            'sum' => '-',
            'status' => 'Ativo',
            'created_at' => $date,
            'updated_at' => $date
        ]);

        ConfigProfileClient::create([
            'order' => '03',
            'profile' => 'Vip',
            'percent_cash' => 20,
            'percent_card' => 15,
            'sum' => '-',
            'status' => 'Ativo',
            'created_at' => $date,
            'updated_at' => $date
        ]);
    }
}
