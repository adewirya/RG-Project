<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function registered()
    {

    	$users = User::all();

    	return view('admin.register')->with('users',$users);

    }
    // here we create fuction for edit users
    public function registeredit(Request $request, $id)
    {
    	$users = User::findOrFail($id);
    	return view('admin.register-edit')->with('users',$users);
    }

    // here we create function for update button
    public function registerupdate(Request $request, $id)
    {
    	$users = User::find($id);
        $users->leadN = $request->input('leadN');
        $users->leadE = $request->input('leadE')->unique();
        $users->leadNumber = $request->input('leadNumber')->unique();
        $users->leadID = $request->input('leadID')->unique();
        $users->leadGIT = $request->input('leadGIT')->unique();
        $users->leadBirth = $request->input('leadBirth');
        $users->leadDOB = $request->input('leadDOB');

        $users->groupName = $request->input('groupName');
        $users->password = $request->input('password');

        $users->update();

    	return redirect('/role-register')->with('status','data is updated'); 
    }
    //delete function
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect('/role-register')->with('status','data deleted');

    }
}
