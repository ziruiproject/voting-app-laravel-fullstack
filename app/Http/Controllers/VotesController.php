<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VotesController extends Controller
{
    public function index()
    {
        return view('vote')->with(['candidates' => DB::table('users')->where('is_candidate', '=', true)->get()]);
    }

    public function vote(Request $request)
    {
        Vote::create([
            'user_id' => Auth::user()->id,
            'candidate_id' => $request->id
        ]);

        return redirect('done');
    }
}
