<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\App;
use App\Models\AppFaq;
use App\Models\AppImage;
use App\Models\Category;
use App\Traits\Base64FilesHandler;
use App\Traits\SlugGenerate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AdminAppController extends Controller
{
    use SlugGenerate, Base64FilesHandler;

    /*
    |===========================================================
    | View listing of all categories --
    |===========================================================
    */
    public function index()
    {
        try {
            $apps = App::all();
            $apps_count = count($apps);
            $active_apps_count = $apps->where('status', true)->count();
            $inactive_apps_count = $apps->where('status', false)->count();
            $featured_apps_count = $apps->where('featured', true)->count();

            // dd($categories_count);

            return view('admin.apps.index')->with([
                'status' => 200,
                'apps' => $apps,
                'apps_count' => $apps_count,
                'active_apps_count' => $active_apps_count,
                'inactive_apps_count' => $inactive_apps_count,
                'featured_apps_count' => $featured_apps_count,
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

            $categories = Category::where(['status' => true])->get();

            return view('admin.apps.create')->with([
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
                'app_icon' => 'required',
//                'splash_screen' => 'required',
//                'seo_description' => 'nullable|string|max:255',
//                'seo_keywords' => 'nullable|string|max:500',
//                'seo_abstraction' => 'nullable|string|max:100',
                'short_description' => 'nullable|string',
                'detailed_description' => 'nullable',
//                'policies' => 'nullable',
//                'release_date' => 'required',
//                'updated_date' => 'required',
            ]);

            $app_icon = (object)$this->uploadBase64File($request->app_icon, "public", "apps/", true);
//            $splash_screen = (object)$this->uploadBase64File($request->splash_screen, "public", "apps/", true);


            $formData = [
                'category_id' => $request->category_id,
                'title' => $request->title,
                'slug' => $this->createSlug('apps', $request->title),
                'app_icon' => $app_icon->file_name,
//                'splash_screen' => $splash_screen->file_name,
//                'seo_description' => $request->seo_description,
//                'seo_keywords' => $request->seo_keywords,
//                'seo_abstraction' => $request->seo_abstraction,
                'short_description' => $request->short_description,
                'detailed_description' => $request->detailed_description,
//                'policies' => $request->policies,
//                'android_link' => $request->android_link,
//                'ios_link' => $request->ios_link,
//                'release_date' => $request->release_date,
//                'updated_date' => $request->updated_date,
                'status' => $request->status == "on" ? 1 : 0,
                'featured' => $request->featured == "on" ? 1 : 0,
            ];

            $app = App::create($formData);
//            $app = App::first();

            Session::flash('Alert', [
                'status' => 200,
                'message' => 'Service is added successfully.'
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
            $app = App::with('appImages', 'appFaqs')->find($id);

            return view('admin.apps.edit')->with([
                'status' => 200,
                'categories' => $categories,
                'app' => $app,
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
                'title' => 'required|string|max:255',
                'app_icon' => 'nullable',
//                'splash_screen' => 'nullable',
//                'seo_description' => 'nullable|string|max:255',
//                'seo_keywords' => 'nullable|string|max:500',
//                'seo_abstraction' => 'nullable|string|max:100',
                'short_description' => 'nullable|string',
                'detailed_description' => 'nullable',
//                'policies' => 'nullable',
//                'release_date' => 'required',
//                'updated_date' => 'required',
            ]);
            $formData = [
                'category_id' => $request->category_id,
                'title' => $request->title,
//                'seo_description' => $request->seo_description,
//                'seo_keywords' => $request->seo_keywords,
//                'seo_abstraction' => $request->seo_abstraction,
                'short_description' => $request->short_description,
                'detailed_description' => $request->detailed_description,
//                'policies' => $request->policies,
//                'android_link' => $request->android_link,
//                'ios_link' => $request->ios_link,
//                'release_date' => $request->release_date,
//                'updated_date' => $request->updated_date,
                'status' => $request->status == "on" ? 1 : 0,
                'featured' => $request->featured == "on" ? 1 : 0,
            ];
            if ($request->app_icon) {
                $app_icon = (object)$this->uploadBase64File($request->app_icon, "public", "apps/", true);
                $formData['app_icon'] = $app_icon->file_name;
            }
            if ($request->splash_screen) {
                $splash_screen = (object)$this->uploadBase64File($request->splash_screen, "public", "apps/", true);
                $formData['splash_screen'] = $splash_screen->file_name;
            }

            $app = App::find($id);
            $app->update($formData);


            Session::flash('Alert', [
                'status' => 200,
                'message' => 'Service is Updated successfully.'
            ]);

            return back();

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {

        App::findorfail($id)->delete();

        Session::flash('Alert', [
            'status' => 200,
            'message' => 'Service is deleted successfully.'
        ]);
        return back();
    }
}
