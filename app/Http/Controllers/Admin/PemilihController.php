<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Voters;
use Illuminate\Http\Request;

class PemilihController extends Controller
{
    public function index()
    {
        return view('app.pemilih', [
            'voters' => Voters::all()
        ]);
    }

    public function destroy($status)
    {
        Voters::where('status', $status)->delete();
        return redirect()->route('app.voters')->with('success', 'Data deleted successfully');
    }
}
