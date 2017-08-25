<?php

use Illuminate\Database\Seeder;
use AVDPainel\Models\Admin\Brand;
use AVDPainel\Models\Admin\Product;
use AVDPainel\Models\Admin\Section;
use AVDPainel\Models\Admin\Category;
use AVDPainel\Models\Admin\GridBrand;
use AVDPainel\Models\Admin\ImageColor;
use AVDPainel\Models\Admin\GroupColor;
use AVDPainel\Models\Admin\GridProduct;
use AVDPainel\Models\Admin\ImagePosition;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $id_brand      = mt_rand(1, '56789');
        $id_grid_brand = mt_rand(1, '1234');
        $id_section    = mt_rand(1, '24680');
        $id_category   = mt_rand(1, '13579');
        $id_product    = mt_rand(1, '97531');
        $id_color      = mt_rand(1, '86420');

        $date = date('Y-m-d H:i:s');

        //brand 1
        Brand::create([
            'id' => $id_brand,
        	'name' => 'Marca 1',
        	'contact' => 'João Santana',
        	'email' => 'design@anselmovelame.com.br',
            'phone' => '(11) 96938-4849',
        	'address' => 'Rua Orient',
        	'number' => '1',
        	'district' => 'Brás',
        	'city' => 'São Paulo',
        	'state' => 'SP',
        	'zip_code' => '33530-000',
        	'description' => 'Descrição da Marca 1',
        	'slug' => 'marca-1',
        	'tags' => 'marca,1',
        	'visits' => 0,
        	'order' => '01',
        	'status' => 'Ativo',
        	'status_logo' => 'Ativo',
        	'status_banner' => 'Ativo',
            'created_at' => $date
        ]);
        //brand 2
        Brand::create([
            'id' => $id_brand+1,
            'name' => 'Marca 2',
            'contact' => 'João Santana',
            'email' => 'design@anselmovelame.com.br',
            'phone' => '(11) 96938-4849',
            'address' => 'Rua Orient',
            'number' => '1',
            'district' => 'Brás',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => '33530-000',
            'description' => 'Descrição da Marca 1',
            'slug' => 'marca-2',
            'tags' => 'marca,2',
            'visits' => 0,
            'order' => '01',
            'status' => 'Ativo',
            'status_logo' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);

        // grids brand 1
        GridBrand::create([
            'id' => $id_grid_brand,
            'brand_id' => $id_brand,
            'name' => 'Masculino',
            'label' => '1/33,2/34,3/35,3/36,2/37,1/38',
            'created_at' => $date
        ]);

        // gris brand 2
        GridBrand::create([
            'id' => $id_grid_brand+1,
            'brand_id' => $id_brand+1,
            'name' => 'Masculino',
            'label' => '1/21,3/22,2/23,2/24,3/25,1/26',
            'created_at' => $date
        ]);


        // Section 1
        Section::create([
            'id' => $id_section,
            'name' => 'Feminino',
            'description' => 'Seção Feminino',
            'slug' => 'feminino',
            'tags' => 'produto,seção,feminino',
            'visits' => 0,
            'order' => '01',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);
        // Section 2
        Section::create([
            'id' => $id_section+1,
            'name' => 'Masculino',
            'description' => 'Seção Masculino',
            'slug' => 'masculino',
            'tags' => 'produto,seção,masculino',
            'visits' => 0,
            'order' => '02',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);
        // Section 3
        Section::create([
            'id' => $id_section+2,
            'name' => 'Infantil',
            'description' => 'Seção Ifantil',
            'slug' => 'infantil',
            'tags' => 'produto,seção,infantil',
            'visits' => 0,
            'order' => '03',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);

        // Category Section 1
        Category::create([
            'id' => $id_category,
            'section_id' => $id_section,
            'name' => 'Botas',
            'section' => 'Feminino',
            'description' => 'Botas feminino',
            'slug' => 'botas-feminino',
            'tags' => 'botas,feminino',
            'visits' => 0,
            'order' => '01',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);

        Category::create([
            'id' => $id_category+1,
            'section_id' => $id_section,
            'name' => 'Tamancos',
            'section' => 'Feminino',
            'description' => 'Tamancos feminino',
            'slug' => 'tamanco-feminino',
            'tags' => 'tamanco,feminino',
            'visits' => 0,
            'order' => '01',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);

        Category::create([
            'id' => $id_category+2,
            'section_id' => $id_section,
            'name' => 'Sandálias',
            'section' => 'Feminino',
            'description' => 'Sandálias feminino',
            'slug' => 'sandalias-feminino',
            'tags' => 'sandalias,feminino',
            'visits' => 0,
            'order' => '01',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);

        // Category Section 2
        Category::create([
            'id' => $id_category+3,
            'section_id' => $id_section+1,
            'name' => 'Chinelos',
            'section' => 'Masculino',
            'description' => 'Chinelos Masculino',
            'slug' => 'chinelos-masculino',
            'tags' => 'chinelos,masculino',
            'visits' => 0,
            'order' => '02',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);
        Category::create([
            'id' => $id_category+4,
            'section_id' => $id_section+1,
            'name' => 'Sapatos',
            'section' => 'Masculino',
            'description' => 'Sapatos Masculino',
            'slug' => 'sapatos-masculino',
            'tags' => 'sapatos,masculino',
            'visits' => 0,
            'order' => '02',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);
        Category::create([
            'id' => $id_category+5,
            'section_id' => $id_section+1,
            'name' => 'Tênis',
            'section' => 'Masculino',
            'description' => 'Tênis Masculino',
            'slug' => 'tenis-infantil',
            'tags' => 'tênis,infantil',
            'visits' => 0,
            'order' => '02',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);

        // Category Section 3
        Category::create([
            'id' => $id_category+6,
            'section_id' => $id_section+2,
            'name' => 'Papetes',
            'section' => 'Infantil',
            'description' => 'Papetes Infantil',
            'slug' => 'papetes-infantil',
            'tags' => 'papetes,infantil',
            'visits' => 0,
            'order' => '03',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);
        Category::create([
            'id' => $id_category+7,
            'section_id' => $id_section+2,
            'name' => 'Rasteirinhas',
            'section' => 'Infantil',
            'description' => 'Rasteirinhas Infantil',
            'slug' => 'rasteirinhas-infantil',
            'tags' => 'rasteirinhas,infantil',
            'visits' => 0,
            'order' => '03',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);
        Category::create([
            'id' => $id_category+8,
            'section_id' => $id_section+2,
            'name' => 'Sapatilhas',
            'section' => 'Infantil',
            'description' => 'Sapatilhas Infantil',
            'slug' => 'sapatilhas-infantil',
            'tags' => 'sapatilhas,infantil',
            'visits' => 0,
            'order' => '03',
            'status' => 'Ativo',
            'status_featured' => 'Ativo',
            'status_banner' => 'Ativo',
            'created_at' => $date
        ]);

    }
}
