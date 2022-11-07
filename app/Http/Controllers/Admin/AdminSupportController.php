<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class AdminSupportController extends Controller
{

    public function subscribers(){
        $subscribers=Subscriber::all();
        return view('admin.subscriber.index',get_defined_vars());
    }
    public function contacts(){
        $contacts=Contact::all();
        return view('admin.subscriber.contacts',get_defined_vars());
    }
}
