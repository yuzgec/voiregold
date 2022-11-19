<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Faq;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Publisher;
use App\Models\Search;
use App\Models\Service;
use App\Models\ShopCart;
use App\Models\Team;
use App\Models\Video;
use App\Models\Project;
use Carbon\Carbon;
use Spatie\Activitylog\Models\Activity;

class DashboardController extends Controller
{
    public function index(){

        $Search = Search::select('key')->whereBetween('created_at', [Carbon::yesterday(),Carbon::today()])->paginate(10);
        $Product = Product::count();
        $Product_Categories = ProductCategory::count();
        return view('backend.index', compact('Search', 'Product', 'Product_Categories'));
    }
}
