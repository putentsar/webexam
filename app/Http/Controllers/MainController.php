<?php

namespace App\Http\Controllers;
use App\Category;
use App\Dish;
use App\DishProduct;
use App\Review;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
     public function home(){
		 $categories = Category::get();
	   $dishes = Dish::paginate(2);
	   return view('home', compact('dishes','categories'));
}
   public function categories() {
	    $categories = Category::get();
	   return view('categories', compact('categories'));
   }
    public function admin() {
	   return view('admin.admin');
   }
     public function login() {
	   return view('auth.login');
   }
    public function register() {
	   return view('auth.register');
   }
   public function category($code){
	   $category = Category::where('code',$code)->first();
	   return view('category', compact('category'));
   }
   
     public function product($cat, $product){
	  $dishes = Dish::where('code', $product)->first();
	  $reviewes = Review::where('dish_id',$dishes->id)->get();
	  return view('product', compact('dishes','reviewes'));
   }
   public function review($cat, $product, Request $request){
	  $dishes = Dish::where('code', $product)->first();
	  	   $reviewes = Review::where('dish_id',$dishes->id)->get();
	     $review = new Review;
		 $review->user_id = $request->user_id;
	   $review->dish_id = $request->dish_id;
	  $review->comment = $request->comment;
	  $review->save();
	  return back();
   }
   
}
