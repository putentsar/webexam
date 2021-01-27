<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Dish;
  use App\Product;
  use App\DishProduct;
class DishProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dish_products = DishProduct::all();
        return view('admin.dish_product.dish_product',compact('dish_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
			$products = Product::all();
			$dishes = Dish::all();
		      return view('admin.dish_product.create', compact('dishes', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request, [
        'dish_id' => 'required|max:255',
        'product_id' => 'required|max:255',
		'amount' => 'required|max:255',
    ]);
		
		$dish_product = new DishProduct;
		$dish_product->amount = $request->amount;
		 $dish_product->dish_id = $request->dish_id;
		 $dish_product->product_id = $request->product_id;
		$dish_product->save();
		
	     return redirect('/admin/dish_product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $dish_product = DishProduct::find($id);
          return view('admin.dish_product.show', compact('dish_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$dishes = Dish::all();
      $products = Product::all();
       $dish_product = DishProduct::find($id);
          return view('admin.dish_product.edit', compact('dish_product', 'products', 'dishes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'dish_id' => 'required|max:255',
        'product_id' => 'required|max:255',
		'amount' => 'required|max:255',
    ]);
		
		$dish_product = DishProduct::find($id);
		 $dish_product->dish_id = $request->dish_id;
		 $dish_product->amount = $request->amount;
		 $dish_product->product_id = $request->product_id;
		$dish_product->save();
		
	     return redirect('/admin/dish_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $dishproduct = DishProduct::find($id);
      $dishproduct->delete();
		return redirect('/admin/dish_product/');
    }
}
