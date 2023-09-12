<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  @if (session()->has('token'))

    <div class="container">
      <header class="mt-5 text-center">
        <h1>Pasangan Calon</h1>
        <p class="text-secondary">Tentukan pilihan anda sekarang dengan tepat</p>
      </header>
      <div class="row mt-5 d-flex justify-content-center">
        @foreach ($candidate as $key => $data)
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="{{ asset('storage/image/candidate/' . $data->image) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center">{{ $data->nama_ketua }} & {{ $data->nama_wakil }}</h5>
                <div class="row mt-4">
                  <div class="col-md-6">
                    <a href="#" class="btn btn-warning w-100 d-block" data-bs-toggle="modal"
                      data-bs-target="#visiMisi{{ $key }}">Visi Misi</a>
                  </div>
                  <div class="col-md-6">
                    <form action="{{ route('vote', $data->id) }}" method="POST" class="d-flex w-100">
                      @csrf
                      <input type="hidden" name="token" value="{{ session('token') }}">
                      <button type="submit" class="btn btn-primary w-100">Pilih</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- Modal --}}
          <div class="modal fade" id="visiMisi{{ $key }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                  <p>{{ $data->visi }}</p>

                  <h4>Misi</h4>
                  <p>{{ $data->misi }}</p>
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
  @else
    <div class="container">
      <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-4">
          <img src="{{ asset('img/photos/not_found_illustration.svg') }}" alt="" class="w-100">
          <h2 class="mt-5 text-center fw-bold">Not Found</h2>
          <p class="text-center">Anda belum memiliki token, silahkan kembali</p>
          <div class="text-center">
            <a href="/" class="btn btn-primary">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  @endif


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
