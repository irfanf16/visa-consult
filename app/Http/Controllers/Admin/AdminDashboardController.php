<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\App;
use App\Models\Contact;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Subscriber;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use App\Models\User;
use App\Models\Category;
use App\Models\Abbreviation\Abbreviation;
use App\Models\Acronym\Acronym;
use App\Models\Science\ScienceBranch;
use App\Traits\ApiHelper;

class AdminDashboardController extends Controller
{
    /*
    |===========================================================
    | View listing of all statistics --
    |===========================================================
    */
    public function index()
    {
        try {
            $categories = Category::where('status', true)->count();
            $apps = App::where('status', true)->count();
            $subscribers = Subscriber::count();
            $contacts = Contact::count();
            $contacts_list = Contact::take(10)->latest()->get();
            $subscribers_list = Subscriber::take(10)->latest()->get();

            return view('admin.dashboard.index', get_defined_vars());
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function setting()
    {
     $setting=Setting::first();
        return view('admin.setting', get_defined_vars());
    }

    public function saveSetting(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'about_us' => 'required|string|max:255',

        ]);
        $formData = [

            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'about_us' => $request->about_us,
        ];
        if ($image = $request->file('admin_logo')) {
            $destinationPath = 'storage/setting/';
            $cat_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $cat_image);
            $formData['admin_logo'] = $cat_image;
        }
        if ($image = $request->file('site_logo')) {
            $destinationPath = 'storage/setting/';
            $cat_image = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $cat_image);
            $formData['site_logo'] = $cat_image;
        }

        Setting::first()->update($formData);

        Session::flash('Alert', [
            'status' => 200,
            'message' => 'Setting is updated successfully.'
        ]);

        return back();
    }


}
