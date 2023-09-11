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
  <main class="container" style="height: 100vh;">
    <header class="text-center">
      <h2 class="fw-bold">Selamat Datang</h2>
      <p>Di Aplikasi E-Voting</p>
    </header>
    <div class="row d-flex justify-content-center mt-5">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <form action="">
              <div class="mb-3">
                <label for="nama_lengkap" class="form-label fw-semibold">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap">
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label fw-semibold">Kelas</label>
                <input type="text" class="form-control" id="kelas">
              </div>
              <div class="mb-3">
                <label for="token" class="form-label fw-semibold">Token</label>
                <input type="text" class="form-control" id="token">
              </div>
              <div class="mb-3">
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Masuk</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
