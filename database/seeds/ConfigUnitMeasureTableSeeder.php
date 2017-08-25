<?php

use AVDPainel\Models\Admin\ConfigUnitMeasure;

use Illuminate\Database\Seeder;

class ConfigUnitMeasureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConfigUnitMeasure::create([
        	'unit' => 12,
        	'name' => 'Pares',
        	'order' => '01',
            'status' => 'Ativo'
        ]);

        ConfigUnitMeasure::create([
        	'unit' => 6,
        	'name' => 'Pares',
        	'order' => '02',
            'status' => 'Ativo'
        ]);

        ConfigUnitMeasure::create([
        	'unit' => 1,
        	'name' => 'Und',
        	'order' => '03',
            'status' => 'Ativo'
        ]);

        ConfigUnitMeasure::create([
        	'unit' => 1,
        	'name' => 'Peça',
        	'order' => '04',
            'status' => 'Ativo'
        ]);

    }
}
