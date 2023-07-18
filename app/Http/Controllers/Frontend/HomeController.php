<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {

    // $pageId = 1;
    // product list
    // $products = s()->db()->find('product', 'status=?', [0]);
    // $product_images = s()->db()->find('product_image', "GROUP By product_id", []);
    // $categories = s()->db()->get('category');
    // $metatags = s()->db()->findOne('metatag', "page = ?", ['home']);
    // $sidebar = s()->db()->findOne('sidebar', "page RLIKE '[[:<:]]" . $pageId . "[[:>:]]'");
    // $popup = s()->db()->findOne('popup', "page RLIKE '[[:<:]]" . $pageId . "[[:>:]]'");
    // $blogs = s()->db()->find('blog', 'status=?', [0]);
    // return view('frontend.pages.home', ['products' => $products, 'categories' => $categories, 'blogs' => $blogs, 'product_images' => $product_images, 'metatags' => $metatags, 'sidebar' => $sidebar, 'popup' => $popup]);
    public function index() {
        return view('frontend.pages.home');
    }
}
