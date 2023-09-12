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
  <main class="">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="col-md-4">
          <header class="text-center mb-4">
            <h1 class="fw-bold">Register</h1>
          </header>
          <div class="card border-0 shadow-lg">
            <div class="card-body">
              <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label fw-semibold">Nama
                    Lengkap</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    id="name">
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label fw-semibold">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    id="email">
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label fw-semibold">password</label>
                  <input type="Password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="password">
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-dark">Register</button>
                    <p class="mt-3 text-center">Sudah punya akun? <a href="{{ route('login') }}"
                        class="text-decoration-none text-dark fw-semibold">Login</a></p>
                  </div>
                </div>
              </form>
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
