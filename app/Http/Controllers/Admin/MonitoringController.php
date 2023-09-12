<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        return view('app.monitoring', [
            'candidate' => Candidate::all()
        ]);
    }
}
