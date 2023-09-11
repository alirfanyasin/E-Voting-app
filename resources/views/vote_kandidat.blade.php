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


  <div class="container">
    <header class="mt-5 text-center">
      <h1>Pasangan Calon</h1>
      <p class="text-secondary">Tentukan pilihan anda sekarang dengan tepat</p>
    </header>
    <div class="row mt-5">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="/img/photos/paslon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Jokowi Dodo & Ma'ruf Amin</h5>
            <div class="row mt-4">
              <div class="col-6">
                <a href="#" class="btn btn-warning d-block w-full" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">Visi Misi</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-primary d-block w-full">Pilih</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="/img/photos/paslon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Jokowi Dodo & Ma'ruf Amin</h5>
            <div class="row mt-4">
              <div class="col-6">
                <a href="#" class="btn btn-warning d-block w-full" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">Visi Misi</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-primary d-block w-full">Pilih</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="/img/photos/paslon.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">Jokowi Dodo & Ma'ruf Amin</h5>
            <div class="row mt-4">
              <div class="col-6">
                <a href="#" class="btn btn-warning d-block w-full">Visi Misi</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-primary d-block w-full">Pilih</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- Modal --}}
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Visi Misi</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h4>Visi</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque natus unde fuga earum quos et, dolores
            expedita. Sunt ipsam sit perferendis, asperiores vel itaque. Ipsum inventore nobis sed labore ullam.</p>

          <h4>Misi</h4>
          <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
            <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
