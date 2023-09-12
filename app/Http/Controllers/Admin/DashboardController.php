<?php

namespace App\Http\Controllers\Admin;

use App\Charts\TotalVoteChart;
use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Token;
use App\Models\User;
use App\Models\Voters;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(TotalVoteChart $totalVoteChart)
    {
        $totalToken = Token::all();
        $totalVoters = Voters::all();
        $totalCandidate = Candidate::all();
        $totalPetugas = User::where('role', 'pengurus')->get();


        return view('app.dashboard', [
            'totalToken' => $totalToken,
            'totalVoters' => $totalVoters,
            'totalCandidate' => $totalCandidate,
            'totalPetugas' => $totalPetugas,
            'voteChart' => $totalVoteChart->build()
        ]);
    }
}
