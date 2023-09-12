@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Pemilih')

@if (Auth::user()->role == 'admin')


  @section('content')
    <div class="container-fluid p-0">
      <h1 class="h3 mb-3">Pemilih</h1>
      <form action="{{ route('app.voters.destroy', ['status' => 'Aktif']) }}" method="POST" class="d-inline mb-3">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete All</button>
      </form>
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="tableKandidat" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th width="100px">No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Token</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @foreach ($voters as $data)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $data->nama }}</td>
                      <td>{{ $data->kelas }}</td>
                      <td>{{ $data->token }}</td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
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

@push('js')
  <script>
    $(document).ready(function() {
      new DataTable('#tableKandidat');
    })
  </script>
@endpush
