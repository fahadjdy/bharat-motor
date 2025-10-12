<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Testimonial;

class HomeController extends Controller
{
   public function home(){
        
        $categories = Category::all();

        // Eager load category for each product
        $products = Product::with('category')
            ->select('id', 'name', 'slug', 'image', 'category_id')
            ->limit(8) 
            ->get();

        $testimonials =Testimonial::all();
        
        return view('home',compact('categories','products','testimonials'));
    }

      public function about(){
        $categories = Category::all(); // Fetch all categories for footer
        return view('about',compact('categories'));
    }

    public function contact(){
        $categories = Category::all(); // Fetch all categories for footer
        $testimonials =Testimonial::all();
        return view('contact',compact('categories','testimonials'));
    }

    public function category($category){

        $category = Category::with('products')->where('slug', $category)->first();
        if(empty($category)){
            abort(404);
        }
        return view('category',compact('category'));
    }

    public function product(){
        $products = Product::with('category')->get();
        return view('products',compact('products'));
    }
}
