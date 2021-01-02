<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('welcome', compact('User'));
    }

    public function show($id){
        $user = User::findOrFail($id);
        return view('show', compact('User'));
    }

    public function create(){
        return view('register');
    }

    public function store(Request $request) {
        $request->validate([
            'groupName' => 'required|max:255',
            'password' => 'required|max:255',
            'groupStat' => 'required|max:255',
            'leadN' => 'required|max:255',
            'leadStat' => 'required|max:255',
            'leadE' => 'required|max:255',
            'leadID'=> 'required|max:255',
            'leadNumber' => 'required|digits:10',
            'leadGIT' => 'required|max:255',
            'leadBirth' => 'required|max:255',
            'leadDOB' => 'required'
            ]);

        User::create([
            'groupName' => $request->groupName,
            'password' => $request->password,
            'groupStat' => $request->groupStat,
            'leadN' => $request->leadN,
            'leadStat' => $request->leadStat,
            'leadE' => $request->leadE,
            'leadID'=> $request->leadID,
            'leadNumber' => $request->leadNumber,
            'leadGit' => $request->leadGit,
            'leadDOB' => $request->leadDOB,
            'leadBirth' => $request->leadBirth
        ]);
        return redirect('/');
    }
}