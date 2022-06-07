@extends('dashboard.layouts.main')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $berita->title }}</h1>

                <div class="mb-4">
                    <a href="/dashboard/berita" class="btn btn-success"><span data-feather="arrow-left"></span> Kembali</a>
                    <a href="/dashboard/berita/{{ $berita->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/berita/{{ $berita->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" onclick="return confirm('Hapus berita ini?')" class="btn btn-danger"><span data-feather="x-circle"></span> Hapus</button>
                    </form>
                </div>

                <img class="card-img-top mt-3" src="https://source.unsplash.com/1200x600?animal" alt="{{ $berita->title }}" class="img-fluid">

                <article class="mt-4 fs-6">
                    {!! $berita->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection