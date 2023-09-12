<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Voting</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <main class="" style="height: 100vh;">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-4">
          <header class="text-center mb-4">
            <h1 class="fw-bold">Selamat Datang</h1>
            <p>Di Aplikasi E-Voting</p>
          </header>
          <div class="card border-0 shadow-lg">
            <div class="card-body">
              <form action="{{ route('start.vote') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                    id="nama_lengkap">
                  @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}.
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="kelas" class="form-label fw-semibold">Kelas <small class="text-secondary fw-normal"><i>
                        (optional)</i></small></label>
                  <input type="text" name="kelas" class="form-control" id="kelas">
                </div>
                <div class="mb-3">
                  <label for="token" class="form-label fw-semibold ">Token</label>
                  <input type="text" name="token" class="form-control @error('token') is-invalid @enderror"
                    id="token">
                  @error('token')
                    <div class="invalid-feedback">
                      {{ $message }}.
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col text-center text-secondary">
              <small>Copyrigth &copy; 2023. created by <a href="https://github.com/alirfanyasin" target="_blank"
                  class="fw-semibold text-decoration-none text-dark">Irfan Yasin</a> </small>
              <br>
              <small class="text-center">Version 1.0.1</small>
            </div>
          </div>
        </div>
      </div>


    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
