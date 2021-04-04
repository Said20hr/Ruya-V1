<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use Gloudemans\Shoppingcart\Facades;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use function React\Promise\all;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       Cart::destroy();
        Cart::add([
            ['id' => '293ad', 'name' => 'Product 1', 'qty' => 1, 'price' => 10.00],
            ['id' => '4832k', 'name' => 'Product 2', 'qty' => 1, 'price' => 10.00, 'options' => ['size' => 'large']]
        ]);
        $cart=Cart::content();
        $carttotal=Cart::subtotal();
        $services=Service::all();
        $sliders=Slider::all();
        $partners=Partners::all();
        $portfolio=Portfolio::where('featured',true)->take(8)->get();
        return view('pages.index')->with([
            'cart'=>$cart,
            'subtotal'=>$carttotal,
            'services'=>$services,
            'sliders'=>$sliders,
            'partners'=>$partners,
            'portfolio'=>$portfolio,
        ]);
    }
}
