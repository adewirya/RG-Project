<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\member2;

class mem2Controller extends Controller
{
    public function index(){
        $member2 = member2::all();
        return view('welcome', compact('member2'));
    }

    public function show($id){
        $member2 = member2::findOrFail($id);
        return view('show', compact('member2'));
    }

    // public function create(){
    //     return view('createLeader');
    // }

    public function store(Request $request)
    {
        $request->validate([
            'mem2' => 'required|max:255',
            'mem2Stat' => 'required|max:255',
            'mem2E' => 'required|max:255',
            'mem2ID'=> 'required|max:255',
            'mem2Number' => 'required|max:13',
            'mem2GIT' => 'required|max:255',
            'mem2DOB' => 'required',
            'mem2Birth' => 'required|max:255'
        ]);

        member2::create([
            'mem2' => $request->mem2,
            'mem2Stat' => $request->mem2Stat,
            'mem2E' => $request->mem2E,
            'mem2ID'=> $request->mem2ID,
            'mem2Number' => $request->mem2Number,
            'mem2Git' => $request->mem2Git,
            'mem2DOB' => $request->mem2DOB,
            'mem2Birth' => $request->mem2Birth
        ]);
        return redirect('/');
    }
}