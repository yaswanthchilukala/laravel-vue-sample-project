<?php

namespace App\Http\Controllers\Api\V1;

use App\Product;
use Input,
    Validator,
    Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use DB;

class ProductsController extends Controller
{
    public function index()
    {
        return Product::all();
        //$uId = Auth::user();
        //print_r($uId); exit;
        // $ddfgg =  DB::table('product')
        //                 ->where('user_id', '=', $uId)
        //                 ->get();
        //                 echo '<pre>'; print_r($ddfgg); exit;

    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return $product;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return Redirect::to('/');
        //return $product;
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return '';
    }
}
