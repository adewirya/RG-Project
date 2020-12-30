<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member3;

class mem3Controller extends Controller
{
    public function index(){
        $member3 = member3::all();
        return view('welcome', compact('member3'));
    }

    public function show($id){
        $member3 = member3::findOrFail($id);
        return view('show', compact('member3'));
    }

    // public function create(){
    //     return view('createLeader');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'mem3' => 'required|max:255',
            'mem3Stat' => 'required|max:255',
            'mem3E' => 'required|max:255',
            'mem3ID'=> 'required|max:255',
            'mem3Number' => 'required|max:13',
            'mem3GIT' => 'required|max:255',
            'mem3DOB' => 'required',
            'mem3Birth' => 'required|max:255'
        ]);

        member3::create([
            'mem3' => $request->mem3,
            'mem3Stat' => $request->mem3Stat,
            'mem3E' => $request->mem3E,
            'mem3ID'=> $request->mem3ID,
            'mem3Number' => $request->mem3Number,
            'mem3Git' => $request->mem3Git,
            'mem3DOB' => $request->mem3DOB,
            'mem3Birth' => $request->mem3Birth
        ]);
        return redirect('/');
    }
}
