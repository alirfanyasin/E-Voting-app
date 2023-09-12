<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\Token;
use App\Models\Token as ModelsToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TokenController extends Controller
{
    public function index()
    {
        return view('app.token', [
            'token' => ModelsToken::all()
        ]);
    }

    public function bulk(Request $request)
    {
        $amount = (int)$request->amount;
        for ($i = 0; $i < $amount; $i++) {
            $data = [
                'token' => Str::random(7),
                'expired' => $request->expired,
                'status' => 'Aktif'
            ];

            dispatch(new Token($data)); // Dispatch satu pekerjaan untuk setiap token
        }
        return redirect()->route('app.token')->with('success', 'Token added successfully');
    }

    public function destroy($status)
    {
        ModelsToken::where('status', $status)->delete();
        return redirect()->route('app.token')->with('success', 'Data deleted successfully');
    }
}
