@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Pemilih')

@section('content')
  <div class="container-fluid p-0">
    <h1 class="h3 mb-3">Pemilih</h1>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="tableKandidat" class="table table-striped" style="width:100%">
              <thead>
                <tr>
                  <th width="100px">No</th>
                  <th>Token</th>
                  <th>Expired</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Hjdur93</td>
                  <td>13 January 2023</td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                </tr>
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
      new DataTable('#tableKandidat');
    })
  </script>
@endpush
