<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    //
    public function createCategory(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $name = $request->name;
        $description = $request->description;

        $category = new Category();
        $category->name = $name;
        $category->description = $description;
        $category->save();

        return redirect(route('category'));
    }

    public function deleteCategory(Request $request){
        $category = Category::find($request->id);
        if($category){
            $category->delete();
            return redirect(route('category'));
        }
    }

    public function indexUpdateCategory(Request $request){
        $id = $request->query('id');
        $category = Category::find($id);
        return view('category.edit', ['category'=>$category]);
    }

    public function updateCategory(Request $request){
        $id = $request->id;
        $category = Category::find($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();
        return redirect(route('category'));
    }
}
