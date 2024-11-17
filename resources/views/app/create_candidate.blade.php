@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Create Candidate')

@section('content')
  <div class="container-fluid p-0">
    <h1 class="h3 mb-3">Create Candidate</h1>
    <form action="{{ route('app.candidate.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="p-4">
              <img src="/img/photos/no-img.jpg" class="card-img-top w-full" alt="..." id="selectedImage">
            </div>
            <div class="card-body mt-3">
              <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                onchange="readFile(this)">
              @error('image')
                <div class="invalid-feedback">
                  {{ $message }}.
                </div>
              @enderror
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="nama_ketua" class="fw-semibold">Nama Ketua</label>
                <input type="text" name="nama_ketua" id="nama_ketua"
                  class="form-control @error('nama_ketua') is-invalid @enderror" value="{{ old('nama_ketua') }}">
                @error('nama_ketua')
                  <div class="invalid-feedback">
                    {{ $message }}.
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="nama_wakil" class="fw-semibold">Nama Wakil</label>
                <input type="text" name="nama_wakil" id="nama_wakil"
                  class="form-control @error('nama_wakil') is-invalid @enderror" value="{{ old('nama_wakil') }}">
                @error('nama_wakil')
                  <div class="invalid-feedback">
                    {{ $message }}.
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="visi" class="fw-semibold">Visi</label>
                <textarea name="visi" id="visi" cols="30" rows="6"
                  class="form-control @error('visi') is-invalid @enderror" value="{{ old('visi') }}">{{ old('visi') }}</textarea>
                @error('visi')
                  <div class="invalid-feedback">
                    {{ $message }}.
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="misi" class="fw-semibold">Misi</label>
                <textarea name="misi" id="description" cols="30" rows="6" style="height: 200px;"
                  placeholder="Tulis disini..." class="form-control @error('misi') is-invalid @enderror" value="{{ old('misi') }}">{{ old('misi') }}</textarea>
                @error('misi')
                  <div class="invalid-feedback">
                    {{ $message }}.
                  </div>
                @enderror
              </div>
              <div class=" mt-4">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection

@push('js')
  <script>
    function readFile(input) {
      let file = input.files[0];
      let fileReader = new FileReader();

      fileReader.onload = function() {
        let selectedImage = document.getElementById('selectedImage');
        selectedImage.src = fileReader.result;
      };

      fileReader.readAsDataURL(file);
    }
  </script>

  <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
  <script>
    ClassicEditor.create(document.querySelector('#description'))
      .catch(error => {
        console.error(error);
      });
  </script>
@endpush
