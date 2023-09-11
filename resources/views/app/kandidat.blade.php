@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Kandidat')

@section('content')
  <div class="container-fluid p-0">
    <h1 class="h3 mb-3">Candidate</h1>
    <div class="row mb-3">
      <div class="col">
        <a href="{{ route('app.candidate.create') }}" class="btn btn-primary">Add Candidate</a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="/img/photos/paslon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Jokowi Dodo & Ma'ruf Amin</h5>
            <div class="mt-4 d-flex gap-2">
              <a href="#" class="btn btn-primary flex-fill">Visi Misi</a>
              <a href="#" class="btn btn-warning flex-fill px-0"><i class="fa-regular fa-pen-to-square"></i></a>
              <a href="#" class="btn btn-danger flex-fill px-0"><i class="fa-regular fa-trash-can"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="/img/photos/paslon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Jokowi Dodo & Ma'ruf Amin</h5>
            <div class="mt-4 d-flex gap-2">
              <a href="#" class="btn btn-primary flex-fill">Visi Misi</a>
              <a href="#" class="btn btn-warning flex-fill px-0"><i class="fa-regular fa-pen-to-square"></i></a>
              <a href="#" class="btn btn-danger flex-fill px-0"><i class="fa-regular fa-trash-can"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="/img/photos/paslon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Jokowi Dodo & Ma'ruf Amin</h5>
            <div class="mt-4 d-flex gap-2">
              <a href="#" class="btn btn-primary flex-fill">Visi Misi</a>
              <a href="#" class="btn btn-warning flex-fill px-0"><i class="fa-regular fa-pen-to-square"></i></a>
              <a href="#" class="btn btn-danger flex-fill px-0"><i class="fa-regular fa-trash-can"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
