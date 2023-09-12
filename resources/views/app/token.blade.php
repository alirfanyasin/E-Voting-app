@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Token')

@section('content')
  <div class="container-fluid p-0">
    <h1 class="h3 mb-3">Token</h1>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row">
      <div class="col-8">
        <div class="d-flex align-items-center gap-2">
          <form action="{{ route('app.token.bulk') }}" method="POST" class="d-flex gap-2 align-items-center">
            @csrf
            <div class="mb-3">
              <label for="expired_date">Expired Date</label>
              <input type="date" class="form-control" name="expired" id="expired_date" required>
            </div>
            <div class="mb-3">
              <label for="amount">Amount</label>
              <input type="number" class="form-control" name="amount" id="amount" required>
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Bulk Token</button>
            </div>
          </form>
          <form action="{{ route('app.token.destroy', ['status' => 'Tidak Aktif']) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete All</button>
          </form>
          <div>
            <a href="" class="btn btn-outline-danger"><i class="fa-regular fa-file-pdf"></i> Export to PDF</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="tableToken" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th width="100px">No</th>
                  <th>Token</th>
                  <th>Status</th>
                  <th>Expired</th>
                </tr>
              </thead>
              <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach ($token as $data)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->token }}</td>
                    <td><span
                        class="badge {{ $data->status == 'Aktif' ? 'text-white text-bg-success' : 'text-bg-danger' }}">{{ $data->status }}</span>
                    </td>
                    <td>{{ date('d F Y', strtotime($data->expired)) }}</td>
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

@push('js')
  <script>
    $(document).ready(function() {
      new DataTable('#tableToken');
    })
  </script>
@endpush
