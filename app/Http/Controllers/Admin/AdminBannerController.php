<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Models\Category;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Traits\SlugGenerate;

class AdminBannerController extends Controller
{
    use SlugGenerate;

    /*
    |===========================================================
    | View listing of all banners --
    |===========================================================
    */
    public function index()
    {
        try {
            $banners = Banner::all();
            $banners_count = count($banners);
            $active_banners_count = $banners->where('status', true)->count();
            $inactive_banners_count = $banners->where('status', false)->count();
            $featured_banners_count = $banners->where('featured', true)->count();

            // dd($banners_count);

            return view('admin.banners.index')->with([
                'status' => 200,
                'banners' => $banners,
                'banners_count' => $banners_count,
                'active_banners' => $active_banners_count,
                'inactive_banners' => $inactive_banners_count,
                'featured_banners' => $featured_banners_count,
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

            return view('admin.banners.create');
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
//                'category_id' => 'nullable|integer',
                'title' => 'required|string|max:255',
//                'seo_description' => 'nullable|string|max:255',
//                'seo_keywords' => 'nullable|string|max:500',
//                'seo_abstraction' => 'nullable|string|max:100',
            ]);
            $formData = [
//                'category_id' => $request->category_id,
                'title' => $request->title,
//                'slug' => $this->createSlug('banners', $request->title),
//                'seo_description' => $request->seo_description,
//                'seo_keywords' => $request->seo_keywords,
//                'seo_abstraction' => $request->seo_abstraction,
                'status' => $request->status == "on" ? 1 : 0,
                'featured' => $request->featured == "on" ? 1 : 0,
            ];
            if ($image = $request->file('image')) {
                $destinationPath = 'storage/banners/';
                $cat_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $cat_image);
                $formData['image'] = $cat_image;
            }



            Banner::create($formData);

            Session::flash('Alert', [
                'status' => 200,
                'message' => 'Banner is added successfully.'
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

            $banner=   Banner::find($id);

            return view('admin.banners.edit')->with([
                'status' => 200,
                '$banner' => $banner,
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

                $path = '/storage/banners/' . $category->image;
                if (File::exists($path)) {
                    unlink($path);
                }
                $destinationPath = 'storage/banners/';
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

        Banner::findorfail($id)->delete();

        Session::flash('Alert', [
            'status' => 200,
            'message' => 'Banner is deleted successfully.'
        ]);
        return back();
    }

}
