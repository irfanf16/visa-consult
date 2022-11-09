<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Affliate;
use App\Models\App;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Review;
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
        $affliates=Affliate::where('status',true)->get();
        $reviews=Review::where('status',true)->get();

        return view('web.home',get_defined_vars());
        return view('website.home',get_defined_vars());
    }

    public function apps($slug)
    {
        $category=Category::with('apps')->where('slug',$slug)->first();
        if ($category) {
            return view('web.all_visas',get_defined_vars());
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
        return view('web.contact');
    }

    public function contact(Request $request){
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name'=>$request->first_name. ' '.$request->last_name,
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
    public function blogs(){
        $blogs=Blog::where('status',true)->get();
        return view('web.blogs',get_defined_vars());

    }
    public function blogDetail($slug){
        $blog=Blog::where('slug',$slug)->first();
        return view('web.blog-details',get_defined_vars());

    }
    public function aboutUs(){
        return view('web.about-us');

    }
}
