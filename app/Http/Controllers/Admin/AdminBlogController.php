<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Traits\SlugGenerate;

class AdminBlogController extends Controller
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
            $categories = Blog::all();
            $categories_count = count($categories);
            $active_categories_count = $categories->where('status', true)->count();
            $inactive_categories_count = $categories->where('status', false)->count();
            $featured_categories_count = $categories->where('featured', true)->count();

            // dd($categories_count);

            return view('admin.blogs.index')->with([
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


            return view('admin.blogs.create');
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
                'title' => 'required|string|max:255',
                'short_description' => 'nullable|string',
                'description' => 'nullable|string',
            ]);
            $formData = [

                'title' => $request->title,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'slug' => $this->createSlug('blogs', $request->title),
                'status' => $request->status == "on" ? 1 : 0,
            ];
            if ($image = $request->file('image')) {
                $destinationPath = 'storage/blogs/';
                $cat_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $cat_image);
                $formData['image'] = $cat_image;
            }



            Blog::create($formData);

            Session::flash('Alert', [
                'status' => 200,
                'message' => 'blog is added successfully.'
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

            $category = Blog::find($id);

            return view('admin.blogs.edit')->with([
                'status' => 200,
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
                'title' => "required|string|max:255",
                'short_description' => 'nullable|string',
                'description' => 'nullable|string',
            ]);

            $category = Category::where('id', $id)->first();
            $formData = [
                'title' => $request->title,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'status' => $request->status == "on" ? 1 : 0,
            ];

            if ($image = $request->file('image')) {

                $path = '/storage/categories/' . $category->image;
                if (File::exists($path)) {
                    unlink($path);
                }
                $destinationPath = 'storage/blogs/';
                $cat_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $cat_image);
                $formData['image'] = $cat_image;
            }


            Blog::where('id', $id)->update($formData);

            Session::flash('Alert', [
                'status' => 200,
                'message' => 'Blog is updated successfully.'
            ]);

            return back();

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {

        Blog::findorfail($id)->delete();

        Session::flash('Alert', [
            'status' => 200,
            'message' => 'Blog is deleted successfully.'
        ]);
        return back();
    }

}
