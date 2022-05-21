<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->hasRole("Admin"))
        {
            $User=User::join('role_user', 'role_user.user_id', '=', 'id')
            ->join('roles', 'roles.id', '=', 'role_id')
            ->select('users.id','users.name','users.email','users.Phone','users.country','roles.display_name')
            ->orderBy('roles.display_name', 'asc')
            ->get();
            return view('OfficeAdmin.DeleteUser',compact('User'));
        }
    }
    public function delete(Request $request)
    {
        if(Auth::user()->hasRole("Admin"))
        {
            User::find($request->id)->delete();
            return redirect()->back()->withErrors(['Mumber has been deleteed successfully.']);
        }
    }
}
