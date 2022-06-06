@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $berita->title }}</h1>

                <img src="https://source.unsplash.com/1200x600/?animal" alt="{{ $berita->title }}" class="img-fluid my-4">
            
                {!! $berita->body !!}
            
                <a href="/berita" class="btn btn-success mt-3">Kembali ke berita</a>
            </div>
        </div>
    </div>
@endsection