<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    //
    public function createProduct(Request $request)
    {
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

    public function deleteProduct(Request $request)
    {
        $product = Product::find($request->id);
        if ($product) {
            $product->delete();
            return redirect(route('product'));
        }
    }

    public function indexUpdateProduct(Request $request)
    {
        $id = $request->query('id');
        $product = Product::find($id);
        $category = Category::all();
        return view('product.edit', [
            'product' => $product,
            'category' => $category
        ]);
    }

    public function updateProduct(Request $request)
    {
//        dd($request->all());
        $id = $request->id;
        $product = Product::find($id);
        if ($product) {
            $product->title = $request->title;
            $product->cost = $request->cost;
            $product->price = $request->price;
            $product->category_id = $request->category_id;
            $product->image = $request->image_url;
            $product->description = $request->description;
            $product->save();
        }
        return redirect(route('product'));
    }

    public function getProductDetail(Request $request){
        $data = DB::table('product')
            ->select('*')
            ->where('id', $request->id)
            ->first();
        return response()->json($data);

    }
}
