<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductsController extends Controller
{
    public function new()
    {
        return view('products.new');
    }

    public function save(Request $request) {

      	$product = new Product;

      	// $this->validate($request,
      	// [
      	//     'name' => 'required|max:255',
      	//     'price' => 'required',
      	//     'description' => 'max:255',
      	//     'status' => 'required',
      	// ]);

      	$product->name = $request->name;
      	$product->price 	= $request->price;
      	$product->status = $request->status;
      	$product->description = $request->description;
      	$product->save();

      	return redirect('/products');
      }

    public function index()
    {
      // $products = App\Product::all();
      $products = DB::table('products')->get();

      return view('products.index', compact('products'));
    }

}
