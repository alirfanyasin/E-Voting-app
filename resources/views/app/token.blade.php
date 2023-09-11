@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Kandidat')

@section('content')
  <div class="container-fluid p-0">
    <h1 class="h3 mb-3">Token</h1>
    <div class="row">
      <div class="col-8">
        <div class="d-flex align-items-center gap-2">
          <form action="" class="d-flex gap-2 align-items-center">
            <div class="mb-3">
              <label for="expired_date">Expired Date</label>
              <input type="date" class="form-control" name="expired_date" id="expired_date">
            </div>
            <div class="mb-3">
              <label for="amount">Amount</label>
              <input type="number" class="form-control" name="amount" id="amount">
            </div>
            <div>
              <button type="submit" class="btn btn-primary">Bulk Token</button>
            </div>
          </form>
          <form action="" class="d-inline">
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
