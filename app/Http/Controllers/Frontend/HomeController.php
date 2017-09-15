<?php

namespace AVD\Http\Controllers\Frontend;

use AVD\Models\Frontend\Section;
use AVD\Models\Frontend\Brand;

use AVD\Http\Controllers\Controller;
use AVD\Interfaces\Frontend\ProductInterface as InterProduct;

use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(InterProduct $interProduct)
    {
        $this->interProduct = $interProduct;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $qsections = Section::where('status', 'Ativo')->with(array(
            'images' => function ($qsections) {
                $qsections->where('status', 'Ativo');
            }
        ))
        ->with(array(
            'categories' => function ($qsections) {
                $qsections->where('status', 'Ativo')->orderBy('name')
                ->with([
                    'products' => function ($qsections) {
                        $qsections->where('active', 1)->orderBy('id', 'desc')
                        ->with([
                            'images' => function ($qsections) {
                                $qsections->where('active', 1)->orderBy('cover', 'desc')
                                ->with([
                                    'positions' => function ($qsections) {
                                        $qsections->where('active', 1)->orderBy('order');
                                    }
                                ]);
                            }
                        ])
                        ->with([
                            'prices' => function ($qsections) {
                                $qsections->orderBy('profile');
                            }
                        ])
                        ->with([
                            'grids' => function ($qsections) {
                                $qsections->orderBy('image_color_id');
                            }
                        ]);
                    }
                ]);
            }
        ))
        ->offset(0)
        ->limit(6)
        ->orderBy('order','asc')
        ->get();

        $qbrands = Brand::where('status', 'Ativo')->orderBy('order')->with(array(
            'images' => function ($qbrands) {
                $qbrands->where('status', 'Ativo');
            }
        ))
        ->offset(0)
        ->limit(15)
        ->orderBy('order','asc')
        ->get();

        $sections = collect($qsections);

        $brands   = collect($qbrands);

        $carbon = new Carbon();        

        foreach ($sections as $section) {
            $section['banner_image'] = null;
            $section['banner_active'] = 'Inativo';
            $section['featured_image'] = null;
            $section['featured_active'] = 'Inativo';
            foreach ($section->categories as $category) {
                // offer
                foreach ($category->products()->where('offer', 1)->get() as $product) {
                    $corrent_date = $carbon->today()->timestamp;
                    $offer_date   = $carbon->parse($product->offer_date)->timestamp;
                    $data         = $product;
                    foreach($section->images as $image){
                        if ($corrent_date < $offer_date) {
                            $colorsOffers = true;
                        } else {
                            $this->interProduct->updateOffer($data, 0);
                        }
                        if($image->type  == "banner") {
                            $section['banner_image'] = $image->image;
                            $section['banner_active'] = $image->status;
                        }
                    }
                }

                // offer
                foreach ($category->products()->where(['featured' => 1])->get() as $product) {
                    foreach($section->images as $image){
                        if($image->type  == "featured") {
                            $section['featured_image'] = $image->image;
                            $section['featured_active'] = $image->status;
                            foreach ($product->images as $color) {
                                $sectionFeatured[]  = [
                                        "color_id" => $color->id,
                                        "product_id" => $color->product_id,
                                        "section_name" => $color->section,
                                        "category_name" => $color->category
                                    ];
                            }   
                        }
                    }
                }

            }
        }

        $collecfeaturead = collect($sectionFeatured);
        $sectionFeatured = $collecfeaturead->unique('section_name');
        $sectionFeatured->values()->all(); 

        foreach ($brands as $brand) {
            foreach ($brand->images as $image) {
                if ($image->type == 'logo') {
                    $brandsLogo[] = [
                        "brand_id" => $image->brand_id,
                        "image" => $image->image,
                        "name" => $brand->name,
                        "slug" => $brand->slug
                    ];
                }
            }
        }


        

        return view('frontend.home.home-1', compact(
            'colorsOffers',
            'sectionFeatured',
            'configProduct',
            'brandsLogo',
            'sections',
            'brands'
        ));




    }


}
