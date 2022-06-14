@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Gambar</h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card bg-light shadow-sm">
                <div class="card-body">
                    <form action="/dashboard/galeri/{{ $galeri->id }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="nama_gambar" class="form-label">Nama Gambar</label>
                            <input type="text" class="form-control @error('nama_gambar') is-invalid @enderror" id="nama_gambar" name="nama_gambar" value="{{ old('nama_gambar', $galeri->nama_gambar) }}">
                            @error('nama_gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <img src="{{ asset('storage/' . $galeri->gambar) }}" class="img-fluid img-preview mb-3 col-sm-5 img-thumbnail d-block">
                            <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" onchange="previewImage()">
                            @error('gambar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-success">Edit Gambar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        function previewImage() {
            const image = document.querySelector('#gambar');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection