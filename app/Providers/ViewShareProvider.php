<?php

namespace App\Providers;

use App\Models\Favorite;
use App\Models\Page;
use App\Models\PageCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Setting;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewShareProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {

        if (! app()->runningInConsole()) {
            Paginator::useBootstrap();
            config()->set('settings', Setting::pluck('value','item')->all());
            $Pages =  Page::with('getCategory')->get();
            $Page_Categories = PageCategory::all();
            $Product_Categories = ProductCategory::with('cat')->where('status', 1)->get()->toFlatTree();

            $Product = Product::with(['getCategory','getComment'])->withCount('getComment')
                ->select('id', 'title', 'price', 'old_price', 'slug','bestselling','status','sku','offer','short')
                ->where('status',1)
                ->orderBy('created_at','desc')
/*                ->inRandomOrder()*/
                ->paginate(30)
                ->fragment('urunler');
            //dd($Product);
            View::share([
                'Pages' => $Pages,
                'Page_Categories' => $Page_Categories,
                'Product_Categories' => $Product_Categories,
                'Product' => $Product
            ]);
        }

    }
}
