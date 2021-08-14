<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with(["products"=>Product::latest()->paginate(8),
                                 "categories" => Category::has("products")->get(),
                                 "categories" => Category::latest()->paginate(4),


                               

    
    
    
    ]);
    }
        /**
     * Show product bty category .
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getProductByCategory(Category $category)
    {
        $products = $category->products()->paginate(8);
        
        return view('home')->with(["products"=>$products,
                                 "categories" => Category::has("products")->get(),

    
    
    
    ]);
    }
    
    
}
