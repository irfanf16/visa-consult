<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\App;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function home()
    {
        $categories=Category::where('featured',1)->get();
        $apps=App::where('featured',1)->get();
        $banners=Banner::where('status',true)->get();
        return view('web.home',get_defined_vars());
        return view('website.home',get_defined_vars());
    }

    public function apps($slug)
    {
        $category=Category::with('apps')->where('slug',$slug)->first();
        if ($category) {
            return view('web.apps',get_defined_vars());
        }
        abort(500);
    }
    public function appPolicy($slug)
    {
        $app=App::where('slug',$slug)->first();
        if ($app) {
            return view('website.appPolicy',get_defined_vars());
        }
        abort(500);
    }
    public function appDetail($slug)
    {
        $app=App::where('slug',$slug)->first();
        $category=Category::with('apps')->where('id',$app->category_id)->first();

        if ($app) {
            return view('web.visa_detail',get_defined_vars());
        }
        abort(500);
    }

    public function contactUs()
    {
        return view('website.contact');
    }

    public function contact(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact_number'=>$request->contact_number,
            'subject'=>$request->subject,
            'message'=>$request->message,
        ]);
        Alert::success('Contact', 'Your Request submitted successfully.');
        return back();
    }
    public function subscribe(Request $request){
        $validated = $request->validate([
            'email' => 'required',
        ]);

        $email=Subscriber::where('email',$request->email)->first();

        if ($email){
            Alert::error('Subscribe', 'Already subscribed');
            return back();
        }
        Subscriber::create([
            'email'=>$request->email,
        ]);
        Alert::success('Subscribe', 'You have subscribed successfully.');
        return back();
    }
}
