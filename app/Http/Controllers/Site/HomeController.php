<?php

namespace AVDPainel\Http\Controllers\Site;


use AVDPainel\Interfaces\Admin\ConfigProductInterface as ConfigProduct;
use AVDPainel\Interfaces\Admin\SectionInterface as InterSection;
use AVDPainel\Models\Admin\Section as Section;



use AVDPainel\Http\Controllers\Controller;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        InterSection  $interSection,
        ConfigProduct $configProduct)
    {
        $this->interSection  = $interSection ;
        $this->configProduct = $configProduct;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$query   = $this->interSection->get();

        $configProduct = $this->configProduct;


        $query = Section::where('status', 'Ativo')->with(array(
            'images' => function ($query) {
                $query->where('status', 'Ativo');
            }
        ))
        ->with(array(
            'categories' => function ($query) {
                $query->where('status', 'Ativo')->orderBy('name')
                ->with([
                    'products' => function ($query) {
                        $query->where('active', 1)->orderBy('id', 'desc')
                        ->with([
                            'images' => function ($query) {
                                $query->where('active', 1)->orderBy('order');
                            }
                        ])
                        ->with([
                            'prices' => function ($query) {
                                $query->orderBy('profile');
                            }
                        ])
                        ->with([
                            'grids' => function ($query) {
                                $query->orderBy('image_color_id');
                            }
                        ]);
                    }
                ]);
            }
        ))
        /*          
        ->with(array(
            'products' => function ($query) {
                $query->where('active', 1)->orderBy('id', 'desc');
            }
        ))
        */
        ->offset(0)
        ->limit(6)
        ->orderBy('order','asc')
        ->get();


        $sections = $query->toArray();


        foreach ($sections as $section) {
            foreach ($section['categories'] as $category) {
                foreach ($category['products'] as $product) {
                    foreach ($product['images'] as $images) {
                        if ($images['product_id'] == $product['id']) {
                            if ($images['cover'] == 1) {
                                dd($images['color']);
                            }
                            
                        }
                        
                    }
                    
                }
                
            }
        }


        return view('frontend.home.home-1', compact(
                    'sections',
                    'configProduct'
                    )
        );
    }


}
