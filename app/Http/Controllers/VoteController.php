<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function vote_kandidat()
    {
        return view('vote_kandidat');
    }
}
