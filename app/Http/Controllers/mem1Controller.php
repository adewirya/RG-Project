<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member1;

class mem1Controller extends Controller
{
    public function index(){
        $member1 = member1::all();
        return view('welcome', compact('member1'));
    }

    public function show($id){
        $member1 = member1::findOrFail($id);
        return view('show', compact('member1'));
    }

    // public function create(){
    //     return view('createLeader');
    // }

    public function store(Request $request)
    {
        $request->validate
        ([
            'mem1' => 'required|max:255',
            'mem1E' => 'required|max:255',
            'mem1ID'=> 'required|max:255',
            'mem1Number' => 'required|max:13',
            'mem1GIT' => 'required|max:255',
            'mem1DOB' => 'required',
            'mem1Birth' => 'required|max:255',
            'mem2' => 'required|max:255',
            'mem2E' => 'required|max:255',
            'mem2ID'=> 'required|max:255',
            'mem2Number' => 'required|max:13',
            'mem2GIT' => 'required|max:255',
            'mem2DOB' => 'required',
            'mem2Birth' => 'required|max:255',
            'mem3' => 'required|max:255',
            'mem3E' => 'required|max:255',
            'mem3ID'=> 'required|max:255',
            'mem3Number' => 'required|max:13',
            'mem3GIT' => 'required|max:255',
            'mem3DOB' => 'required',
            'mem3Birth' => 'required|max:255'
        ]);

        member1::create([
            'mem1' => $request->mem1,
            'mem1E' => $request->mem1E,
            'mem1ID'=> $request->mem1ID,
            'mem1Number' => $request->mem1Number,
            'mem1Git' => $request->mem1Git,
            'mem1DOB' => $request->mem1DOB,
            'mem1Birth' => $request->mem1Birth,
            'mem2' => $request->mem2,
            'mem2E' => $request->mem2E,
            'mem2ID'=> $request->mem2ID,
            'mem2Number' => $request->mem2Number,
            'mem2Git' => $request->mem2Git,
            'mem2DOB' => $request->mem2DOB,
            'mem2Birth' => $request->mem2Birth,
            'mem3' => $request->mem3,
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
