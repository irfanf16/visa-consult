<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\App;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
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


}
