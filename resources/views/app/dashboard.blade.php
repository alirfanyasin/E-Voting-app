@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Dashboard')

@section('content')
  <div class="container-fluid p-0">
    <h1 class="h3 mb-3">Dashboard</h1>
    <div class="row">
      <div class="col-xl-6 col-xxl-5 d-flex">
        <div class="w-100">
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Total Token</h5>
                    </div>
                  </div>
                  <h1 class="mt-1 mb-3">{{ count($totalToken) }}</h1>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Jumlah Kandidat</h5>
                    </div>
                  </div>
                  <h1 class="mt-1 mb-3">{{ count($totalCandidate) }}</h1>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Total Suara</h5>
                    </div>
                  </div>
                  <h1 class="mt-1 mb-3">{{ count($totalVoters) }}</h1>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col mt-0">
                      <h5 class="card-title">Pengurus</h5>
                    </div>
                  </div>
                  <h1 class="mt-1 mb-3">{{ count($totalPetugas) }}</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-xxl-7">
        <div class="card flex-fill w-100">
          <div class="card-header">
            <h5 class="card-title mb-0">Statistik</h5>
          </div>
          <div class="card-body py-3">
            <div class="chart chart-sm">
              {!! $voteChart->container() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


@push('js')
  <script src="{{ $voteChart->cdn() }}"></script>

  {{ $voteChart->script() }}
@endpush
