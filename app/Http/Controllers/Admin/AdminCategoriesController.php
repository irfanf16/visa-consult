<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Traits\SlugGenerate;

class AdminCategoriesController extends Controller
{
    use SlugGenerate;

    /*
    |===========================================================
    | View listing of all categories --
    |===========================================================
    */
    public function index()
    {
        try {
            $categories = Category::all();
            $categories_count = count($categories);
            $active_categories_count = $categories->where('status', true)->count();
            $inactive_categories_count = $categories->where('status', false)->count();
            $featured_categories_count = $categories->where('featured', true)->count();

            // dd($categories_count);

            return view('admin.categories.index')->with([
                'status' => 200,
                'categories' => $categories,
                'categories_count' => $categories_count,
                'active_categories' => $active_categories_count,
                'inactive_categories' => $inactive_categories_count,
                'featured_categories' => $featured_categories_count,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /*
    |===========================================================
    | Show the form for creating a new category --
    |===========================================================
    */
    public function create()
    {
        try {

            $categories = Category::where([
                'status' => true,
                'category_id' => null
            ])
                ->get();

            return view('admin.categories.create')->with([
                'status' => 200,
                'categories' => $categories,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /*
    |===========================================================
    | Store the newly created category in storage --
    |===========================================================
    */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'category_id' => 'nullable|integer',
                'title' => 'required|string|max:255',
                'seo_description' => 'nullable|string|max:255',
                'seo_keywords' => 'nullable|string|max:500',
                'seo_abstraction' => 'nullable|string|max:100',
            ]);

            if ($image = $request->file('image')) {
                $destinationPath = 'storage/categories/';
                $cat_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $cat_image);
                $formData['image'] = $cat_image;
            }

            $formData = [
                'category_id' => $request->category_id,
                'title' => $request->title,
                'slug' => $this->createSlug('categories', $request->title),
                'seo_description' => $request->seo_description,
                'seo_keywords' => $request->seo_keywords,
                'seo_abstraction' => $request->seo_abstraction,
                'status' => $request->status == "on" ? 1 : 0,
                'featured' => $request->featured == "on" ? 1 : 0,
            ];

            Category::create($formData);

            Session::flash('Alert', [
                'status' => 200,
                'message' => 'Category is added successfully.'
            ]);

            return back();

        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /*
    |===========================================================
    | Display the specified category details --
    |===========================================================
    */
    public function show($id)
    {
        //
    }


    /*
    |===========================================================
    | Show the form for editing the specified category details
    |===========================================================
    */
    public function edit($id)
    {
        try {
            $categories = Category::all();
            $category = $categories->find($id);

            return view('admin.categories.edit')->with([
                'status' => 200,
                'categories' => $categories,
                'category' => $category,
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /*
    |===========================================================
    | Update the specified category in storage --
    |===========================================================
    */
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'category_id' => 'nullable|integer',
                'title' => "required|string|max:255",
                'seo_description' => 'nullable|string|max:255',
                'seo_keywords' => 'nullable|string|max:500',
                'seo_abstraction' => 'nullable|string|max:100',
            ]);

            $category = Category::where('id', $id)->first();
            $formData = [
                'category_id' => $request->category_id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'seo_description' => $request->seo_description,
                'seo_keywords' => $request->seo_keywords,
                'seo_abstraction' => $request->seo_abstraction,
                'status' => $request->status == "on" ? 1 : 0,
                'featured' => $request->featured == "on" ? 1 : 0,
            ];

            if ($image = $request->file('image')) {

                $path = '/storage/categories/' . $category->image;
                if (File::exists($path)) {
                    unlink($path);
                }
                $destinationPath = 'storage/categories/';
                $cat_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $cat_image);
                $formData['image'] = $cat_image;
            }


            Category::where('id', $id)->update($formData);

            Session::flash('Alert', [
                'status' => 200,
                'message' => 'Category is updated successfully.'
            ]);

            return back();

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {

        Category::findorfail($id)->delete();

        Session::flash('Alert', [
            'status' => 200,
            'message' => 'Category is deleted successfully.'
        ]);
        return back();
    }

}
