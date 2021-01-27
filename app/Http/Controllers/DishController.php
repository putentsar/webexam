<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Dish;
  use App\Category;
class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$dishes = Dish::all();
        return view('admin.dish.dish', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$categories = Category::all();
        return view('admin.dish.create', compact('categories'));
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
        'name' => 'required|max:255',
        'code' => 'required|max:255',
		 'colories' => 'required|max:255',
        'weight' => 'required|max:255',
		 'category_id' => 'required|max:255',
    ]);
		
		$dish = new Dish;
		 $dish->name = $request->name;
		 $dish->code = $request->code;
		 $dish->colories = $request->colories;
		 $dish->weight = $request->weight;
		 $dish->category_id = $request->category_id;
		$dish->save();
		
	     return redirect('/admin/dishes/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dish = Dish::find($id);
          return view('admin.dish.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$categories = Category::all();
       $dish = Dish::find($id);
          return view('admin.dish.edit', compact('dish', 'categories'));
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
        'name' => 'required|max:255',
        'code' => 'required|max:255',
		 'colories' => 'required|max:255',
        'weight' => 'required|max:255',
		 'category_id' => 'required|max:255',
    ]);
		
		$dish = Dish::find($id);
		 $dish->name = $request->name;
		 $dish->code = $request->code;
		 $dish->colories = $request->colories;
		 $dish->weight = $request->weight;
		 $dish->category_id = $request->category_id;
		$dish->save();
		
	     return redirect('/admin/dishes/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish = Dish::find($id);
      $dish->delete();
		return redirect('/admin/dishes/');
    }
}
