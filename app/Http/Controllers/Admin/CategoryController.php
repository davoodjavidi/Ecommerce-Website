<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.categories.index',[
            'categories' => Category::all()
        ]);
    }


    public function create()
    {
        return view('admin.categories.create',[
            'categories' => Category::all()
        ]);
    }


    public function store(AddCategoryRequest $request)
    {

        Category::query()->create([
            'title' =>$request->get('title'),
            'category_id' =>$request->get('category_id')
        ]);

        return redirect('/adminpanel/categories/list');
    }


    public function show(Category $category)
    {
        //
    }


    public function edit(Category $category)
    {
        return view('admin.categories.edit',[
            'category' => $category,
            'categories' => Category::all()
        ]);
    }


    public function update(Request $request, Category $category)
    {
        $category ->update([
           'category_id' => $request->get('category_id'),
           'title' => $request->get('title')
        ]);

        return redirect('/adminpanel/categories/list');
    }


    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.index'));
    }
}
