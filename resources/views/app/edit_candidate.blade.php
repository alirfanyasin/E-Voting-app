@extends('layouts.app')
@section('title', env('APP_NAME') . ' - Edit Candidate')

@section('content')
  <div class="container-fluid p-0">
    <h1 class="h3 mb-3">Edit Candidate</h1>
    <form action="{{ route('app.candidate.update', $data->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="p-4">
              <img src="{{ asset('storage/image/candidate/' . $data->image) }}" class="card-img-top w-full"
                alt="{{ $data->nama_ketua }} & {{ $data->nama_wakil }}" id="selectedImage">
            </div>
            <div class="card-body mt-3">
              <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                onchange="readFile(this)" value="{{ $data->image }}">
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
                  class="form-control @error('nama_ketua') is-invalid @enderror" value="{{ $data->nama_ketua }}">
                @error('nama_ketua')
                  <div class="invalid-feedback">
                    {{ $message }}.
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="nama_wakil" class="fw-semibold">Nama Wakil</label>
                <input type="text" name="nama_wakil" id="nama_wakil"
                  class="form-control @error('nama_wakil') is-invalid @enderror" value="{{ $data->nama_wakil }}">
                @error('nama_wakil')
                  <div class="invalid-feedback">
                    {{ $message }}.
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="visi" class="fw-semibold">Visi</label>
                <textarea name="visi" id="visi" cols="30" rows="6"
                  class="form-control @error('visi') is-invalid @enderror" value="{{ $data->visi }}">{{ $data->visi }}</textarea>
                @error('visi')
                  <div class="invalid-feedback">
                    {{ $message }}.
                  </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="misi" class="fw-semibold">Misi</label>
                <textarea name="misi" id="misi" cols="30" rows="6"
                  class="form-control @error('misi') is-invalid @enderror" value="{{ $data->misi }}">{{ $data->misi }}</textarea>
                @error('misi')
                  <div class="invalid-feedback">
                    {{ $message }}.
                  </div>
                @enderror
              </div>
              <div class=" mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
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

      fileReader.readAsDataURL(file); // Ubah menjadi Data URL agar dapat digunakan sebagai src gambar
    }
  </script>

  
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor.create(document.querySelector('#misi'))
  .catch(error => {
  console.error(error);
  });
</script>
@endpush
