<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Token;
use App\Models\Voters;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function start_vote(Request $request)
    {
        $token = Token::where('token', $request->token)->first();

        $validation = $request->validate([
            'nama' => 'required',
            'token' => 'required|unique:voters',
        ], [
            'token.required' => 'Token wajib diisi',
            'token.unique' => 'Token telah digunakan',
            'nama.required' => 'Nama Wajib di isi',
        ]);

        $validation['kelas'] = $request->kelas;
        $validation['candidate_id'] = 0;
        $validation['status'] = 'Aktif';
        if ($token == true) {
            Voters::create($validation);
            $token->update(['status' => 'Tidak Aktif']);
        } else {
            return redirect('/')->with('error', 'Token salah');
        }
        return redirect('vote-candidate')->with('token', $request->token);
    }



    public function vote_kandidat()
    {
        return view('vote_kandidat', [
            'candidate' => Candidate::all()
        ]);
    }


    public function vote(Request $request, $id)
    {
        $token = $request->token;

        $voter  = Voters::where('token', $token)->first();

        $voter->update(['candidate_id' => $id]);

        return redirect('success-vote')->with('success_vote', 'Berhasil Memilih Kandidat');
    }


    public function success_vote()
    {
        return view('success_vote');
    }
}
