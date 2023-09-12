<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KandidatController extends Controller
{
    public function index()
    {
        return view('app.kandidat', [
            'candidate' => Candidate::all()
        ]);
    }

    public function create()
    {
        return view('app.create_candidate');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_ketua' => 'required',
            'nama_wakil' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'nama_ketua.required' => 'Nama ketua wajib diisi',
            'nama_wakil.required' => 'Nama wakil wajib diisi',
            'visi.required' => 'Visi wajib diisi',
            'misi.required' => 'Misi wajib diisi',
            'image.required' => 'Gambar wajib diisi',
            'image.mimes' => 'Gambar wajib bertipe JPG, JPEG, PNG',
            'image.max' => 'Gambar maksimal 2 MB'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomString = Str::random(5);
            $nameImage = $randomString . '_' . $file->getClientOriginalName();
            $file->storeAs('public/image/candidate', $nameImage);
            $validation['image'] = $nameImage;
        }

        Candidate::create($validation);

        return redirect()->route('app.candidate')->with('success', 'Data added successfully');
    }

    public function edit($id)
    {
        return view('app.edit_candidate', [
            'data' => Candidate::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $validation = $request->validate([
            'nama_ketua' => 'required',
            'nama_wakil' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'nama_ketua.required' => 'Nama ketua wajib diisi',
            'nama_wakil.required' => 'Nama wakil wajib diisi',
            'visi.required' => 'Visi wajib diisi',
            'misi.required' => 'Misi wajib diisi',
            'image.mimes' => 'Gambar wajib bertipe JPG, JPEG, PNG',
            'image.max' => 'Gambar maksimal 2 MB'
        ]);

        $fotoLama = Candidate::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $randomString = Str::random(5);
            $nameImage = $randomString . '_' . $file->getClientOriginalName();
            $file->storeAs('public/image/candidate', $nameImage);
            $validation['image'] = $nameImage;

            Storage::delete('public/image/candidate/' . $fotoLama->image);
        }

        Candidate::where('id', $id)->update($validation);

        return redirect()->route('app.candidate')->with('success', 'Data updated successfully');
    }


    public function destroy($id)
    {
        $data = Candidate::findOrFail($id);
        Storage::delete('public/image/candidate/' . $data->image);
        $data->delete();

        return redirect()->route('app.candidate')->with('success', 'Data deleted successfully');
    }
}
