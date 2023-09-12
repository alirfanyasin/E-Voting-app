@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Realtime Vote Monitoring')

@section('content')
  <div class="container-fluid p-0">
    {{-- <h1 class="h3 mb-3">Monitoring</h1> --}}
    <div class="row mb-5">
      <div class="col text-center">
        <h1 class="fw-bold">Realtime Vote Monitoring</h1>
        <div id="countdown" class="fw-bold text-primary" style="font-size: 30px;"></div>
      </div>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('success') }}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="row d-flex justify-content-center">
      @foreach ($candidate as $key => $data)
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('storage/image/candidate/' . $data->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">{{ $data->nama_ketua }} & {{ $data->nama_wakil }}</h5>
              <div class="vote_result text-center mt-4">
                <h1 class="fw-bold" style="font-size: 80px;">{{ $data->votes->count() }}</h1>
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

@push('js')
  <script>
    function startCountdown() {
      var time = 300; // 1 minute in seconds
      var countdown = document.getElementById("countdown");

      function updateCountdown() {
        var minutes = Math.floor(time / 60);
        var seconds = time % 60;
        countdown.textContent = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

        if (time === 0) {
          // Reload the page when the countdown reaches 0
          location.reload();
        } else {
          time--;
          setTimeout(updateCountdown, 1000); // Update every 1 second
        }
      }

      updateCountdown();
    }

    // Start the countdown when the page loads
    window.addEventListener("load", startCountdown);
  </script>
@endpush
