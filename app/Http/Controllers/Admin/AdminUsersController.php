<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use App\Models\User;
use App\Models\Category;
use App\Models\Abbreviation\Abbreviation;
use App\Models\Acronym\Acronym;


use App\Traits\ApiHelper;

class AdminUsersController extends Controller
{
    /*
    |===========================================================
    | View listing of all users --
    |===========================================================
    */
    public function index()
    {
        try {
            $users                = User::all();
            $users_count          = count($users);
            $active_users_count   = $users->where('status',true)->count();
            $inactive_users_count = $users->where('status',false)->count();
            $featured_users_count = $users->where('featured',true)->count();

            // dd($users_count);

            return view('admin.users.index')->with([
                'status'        => 200,
                'users'         => $users,
                'users_count'   => $users_count,
                'active_users'  => $active_users_count,
                'inactive_users'=> $inactive_users_count,
                'featured_users'=> $featured_users_count,
            ]);
        } 
        catch (\Throwable $th) {
            throw $th;
        }
    }



}