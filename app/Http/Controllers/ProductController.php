<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    //
    public function createProduct(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'image_url' => 'required',
            'category_id' => 'required',
        ]);

        $title = $request->title;
        $cost = $request->cost;
        $price = $request->price;
        $image_url = $request->image_url;
        $category_id = $request->category_id;
        $description = $request->description;

        $product = new Product();
        $product->title = $title;
        $product->cost = $cost;
        $product->price = $price;
        $product->image = $image_url;
        $product->category_id = $category_id;
        $product->description = $description;
        $product->save();
        return redirect(route('product'));
    }

    public function deleteProduct(Request $request){
        $product = Product::find($request->id);
        if($product){
            $product->delete();
            return redirect(route('product'));
        }
    }

    public function indexUpdateProduct(Request $request){
        $id = $request->query('id');
        $product = Product::find($id);
        return view('product.edit', ['product'=>$product]);
    }

    public function updateProduct(Request $request){
        $id = $request->id;
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->save();
        return redirect(route('product'));
    }
}
