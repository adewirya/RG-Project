<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\leaders;

class LeaderController extends Controller
{
    public function index(){
        $leaders = leaders::all();
        return view('welcome', compact('leaders'));
    }

    public function show($id){
        $leaders = leaders::findOrFail($id);
        return view('show', compact('leaders'));
    }

    public function create(){
        return view('createLeader');
    }

    public function store(Request $request){
        $request->validate([
            'leadN' => 'required|max:255',
            'leadStat' => 'required|max:255',
            'leadE' => 'required|max:255',
            'leadID'=> 'required|max:255',
            'leadNumber' => 'required|max:13',
            'leadGIT' => 'required|max:255',
            'leadDOB' => 'required',
            'leadBirth' => 'required|max:255'
        ]);

        leaders::create([
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
