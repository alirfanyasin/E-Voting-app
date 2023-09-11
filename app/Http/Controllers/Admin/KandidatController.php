<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index()
    {
        return view('app.kandidat');
    }

    public function create()
    {
        return view('app.create_candidate');
    }
}
