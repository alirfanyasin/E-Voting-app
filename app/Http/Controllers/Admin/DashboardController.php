<?php

namespace App\Http\Controllers\Admin;

use App\Charts\TotalVoteChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(TotalVoteChart $totalVoteChart)
    {
        return view('app.dashboard', [
            'voteChart' => $totalVoteChart->build()
        ]);
    }
}
