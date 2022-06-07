@extends('layouts.main')

@section('content')
    <section id="headline">
        <div class="container-fluid">
            <div class="container px-2 px-md-0 my-5">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-3 col-5">
                        @if ($berita[0]->image)
                            <div style="max-width: 200; overflow: hidden">
                                <img src="{{ asset('storage/' . $berita[0]->image) }}" alt="{{ $berita[0]->title }}">
                            </div>
                        @else
                            <img src="https://source.unsplash.com/200x362/?animal" alt="" class="img-fluid px-md-4 py-md-4" />
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-3 col-6">
                        <img src="https://source.unsplash.com/250x180/?animal" alt="{{ $berita[0]->title }}" class="img-fluid pb-4" />
                        <img src="https://source.unsplash.com/250x200/?animal" alt="{{ $berita[0]->title }}" class="img-fluid" />
                    </div>
                    <div class="col-md-11 mx-md-2 mx-lg-0 mx-0 col-lg-5 col-12 py-3 py-md-0">
                        <a href="/berita/{{ $berita[0]->slug }}" class="text-decoration-none text-dark"><h1 class="fw-bolder">{{ $berita[0]->title }}</h1></a>
                        <p class="fw-light">
                            {{ $berita[0]->excerpt }}
                        </p>
                        <div class="d-grid col-10 col-lg-6 col-md-4 text-center">
                            <a href="/berita/{{ $berita[0]->slug }}" class="btn btn-success">Baca Selengkapnya ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="container-fluid">
            <div class="container my-5">
                <h1 class="fw-bolder">Berita Lainnya</h1>
                <div class="row mt-4 text-black">
                    @foreach ($berita->skip(1) as $b)
                        <div class="col-12 col-md-6 col-lg-4 mb-0 mb-md-4 d-flex d-md-blok justify-content-center justify-content-md-start">
                            <div class="card text-center bg-dark bg-opacity-10" style="width: 25rem">
                                @if ($b->image)
                                    <img src="{{ asset('storage/' . $b->image) }}" class="card-img-top img-fluid news-cards" alt="{{ $b->title }}">
                                @else
                                    <img src="https://source.unsplash.com/400x220/?animal" class="card-img-top img-fluid news-cards" alt="cards-1" />
                                @endif
                                <div class="card-body">
                                    <a href="/berita/{{ $b->slug }}" class="text-decoration-none text-dark"><h5 class="card-title">{{ $b->title }}</h5></a>
                                    <p class="card-text text-muted">{{ $b->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-end">
                    {{ $berita->links() }}
                </div>
            </div>
        </div>
    </section>
    
@endsection