@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Candidate')

@if (Auth::user()->role == 'admin')
  @section('content')
    <div class="container-fluid p-0">
      <h1 class="h3 mb-3">Candidate</h1>
      <div class="row mb-3">
        <div class="col">
          <a href="{{ route('app.candidate.create') }}" class="btn btn-primary">Add Candidate</a>
        </div>
      </div>
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> {{ session('success') }}.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <div class="row">
        @foreach ($candidate as $key => $data)
          <div class="col-md-4">
            <div class="card">
              <img src="{{ asset('storage/image/candidate/' . $data->image) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">{{ $data->nama_ketua }} & {{ $data->nama_wakil }}</h5>
                <div class="mt-4 d-flex gap-2">
                  <a href="#" class="btn btn-primary flex-fill" data-bs-toggle="modal"
                    data-bs-target="#visiMisiModal{{ $key }}">Visi Misi</a>
                  <div>
                    <a href="{{ route('app.candidate.edit', $data->id) }}" class="btn btn-warning"><i
                        class="fa-regular fa-pen-to-square"></i></a>
                  </div>

                  <form action="{{ route('app.candidate.destroy', $data->id) }}" method="POST" class="">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?')"><i
                        class="fa-regular fa-trash-can"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>


          {{-- Modal --}}
          <div class="modal fade" id="visiMisiModal{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Visi Misi {{ $data->nama_ketua }} &
                    {{ $data->nama_wakil }}</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <h4>Visi</h4>
                  <p>{{ $data->visi }}.</p>

                  <h4>Misi</h4>
                  <p>{{ $data->misi }}.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  @endsection
@else
  @section('content')
    <div class="container">
      <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-4">
          <img src="{{ asset('img/photos/not_found_illustration.svg') }}" alt="" class="w-100">
          <h2 class="mt-5 text-center fw-bold">Not Found</h2>
          <p class="text-center">Anda bukan admin, silahkan kembali</p>
          <div class="text-center">
            <a href="/app/dashboard" class="btn btn-primary">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  @endsection
@endif
