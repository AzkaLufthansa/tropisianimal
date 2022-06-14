@extends('layouts.main')

@section('content')
    <section id="carousel" class="container-fluid">
        <div class="container my-5 pb-1">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/buaya-carousel.png" class="d-block w-100 img-fluid" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="assets/buaya-carousel.png" class="d-block w-100 img-fluid" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section id="galeri" class="container-fluid">
        <div class="container pb-5">
            <div class="row pb-5">
                @foreach ($galeri as $g)
                    <div class="col-6 pb-5 pb-md-0 col-md-3">
                        <img src="{{ asset('storage/' . $g->gambar) }}" alt="{{ $g->nama_gambar }}}}" class="img-fluid mb-4" />
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-end">
                {{ $galeri->links() }}
            </div>
        </div>
    </section>
@endsection