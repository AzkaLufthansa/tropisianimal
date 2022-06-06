@extends('layouts.main')

@section('content')
    <section id="headline">
        <div class="container-fluid">
            <div class="container px-2 px-md-0 my-5">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-3 col-5">
                        <img src="https://source.unsplash.com/200x362/?anima" alt="" class="img-fluid px-md-4 py-md-4" />
                    </div>
                    <div class="col-md-6 col-lg-3 col-6">
                        <img src="https://source.unsplash.com/250x150/?anima" alt="" class="img-fluid pb-4" />
                        <img src="https://source.unsplash.com/250x200/?anima" alt="" class="img-fluid" />
                    </div>
                    <div class="col-md-11 mx-md-2 mx-lg-0 mx-0 col-lg-5 col-12 py-3 py-md-0">
                        <a href="/berita/{{ $berita[0]->slug }}" class="text-decoration-none text-dark"><h1 class="fw-bolder">{{ $berita[0]->title }}</h1></a>
                        <p class="fw-light">
                            {{ $berita[0]->excerpt }}
                        </p>
                        <div class="d-grid col-10 col-lg-6 col-md-4 text-center">
                            <button class="btn btn-success">Baca Selengkapnya ></button>
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
                                <img src="https://source.unsplash.com/400x220/?animal" class="card-img-top img-fluid news-cards" alt="cards-1" />
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