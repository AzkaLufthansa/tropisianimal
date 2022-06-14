@extends('layouts.main')

@section('content')
    <section id="tentang-kami">
        <div class="container my-5 pb-sm-4 px-3 py-3">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h6 class="text-success fw-bold">TENTANG KAMI</h6>
                    <h1 class="fw-bolder">Membangun</h1>
                    <h1 class="fw-bolder">Komunitas Hewan</h1>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, saepe. Autem maxime, illum recusandae placeat accusantium minima, expedita est id ipsum eligendi cum aliquid corporis? Nemo vitae facere deserunt earum.
                    </p>
                    <p class="fw-light pt-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel corrupti possimus eius eaque, quis, alias repudiandae ex quaerat eligendi odit eos assumenda fugit tempora aspernatur fugiat ut, nesciunt consequuntur atque.
                    </p>
                    <div class="d-grid col-8 col-lg-5 col-md-8 text-center">
                        <a href="/tentang" class="btn btn-success">Baca Selengkapnya ></a>
                    </div>
                </div>
                <div class="col-sm-6 p-4 p-md-1">
                    <div class="row pt-4">
                        <img src="assets/gajah.png" alt="" class="img-fluid d-block col-6" />
                        <img src="assets/komodo.png" alt="" class="img-fluid d-block col-6" />
                    </div>
                    <div class="py-2">
                        <img src="assets/buaya.png" alt="" class="img-fluid col-12" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cards">
        <div class="cards-banner container-fluid py-3">
            <div class="container my-5 pt-3 px-3">
                <h1 class="fw-bolder lh-1">Kami Membawa Anda</h1>
                <h1 class="fw-bolder lh-base">Untuk Mengetahui Lebih Dalam</h1>
                <div class="row mt-5 gap-0 text-black">
                    <div class="mb-3 mb-md-3 mb-lg-0 col-12 col-md-6 col-lg-3 d-flex d-md-blok justify-content-center justify-content-md-start">
                        <div class="card text-center" style="width: 19rem">
                            <div class="card-body mx-auto d-grid">
                                <div class="rounded-circle bg-success col-4 mx-auto py-3">
                                    <img src="assets/pawprint.svg" alt="" style="width: 50px" />
                                </div>
                                <h5 class="card-title mx-auto mt-3">Lorem Ipsum Dolor Sit Amet</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad accusamus</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mb-md-3 mb-lg-0 col-12 col-md-6 col-lg-3 d-flex d-md-blok justify-content-center justify-content-md-start">
                        <div class="card text-center" style="width: 19rem">
                            <div class="card-body mx-auto d-grid">
                                <div class="rounded-circle bg-success col-4 mx-auto py-3">
                                    <img src="assets/pawprint.svg" alt="" style="width: 50px" />
                                </div>
                                <h5 class="card-title mx-auto mt-3">Lorem Ipsum Dolor Sit Amet</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad accusamus</p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mb-lg-0 col-12 col-md-6 col-lg-3 d-flex d-md-blok justify-content-center justify-content-md-start">
                        <div class="card text-center" style="width: 19rem">
                            <div class="card-body mx-auto d-grid">
                                <div class="rounded-circle bg-success col-4 mx-auto py-3">
                                    <img src="assets/pawprint.svg" alt="" style="width: 50px" />
                                </div>
                                <h5 class="card-title mx-auto mt-3">Lorem Ipsum Dolor Sit Amet</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad accusamus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 d-flex d-md-blok justify-content-center justify-content-md-start">
                        <div class="card text-center" style="width: 19rem">
                            <div class="card-body mx-auto d-grid">
                                <div class="rounded-circle bg-success col-4 mx-auto py-3">
                                    <img src="assets/pawprint.svg" alt="" style="width: 50px" />
                                </div>
                                <h5 class="card-title mx-auto mt-3">Lorem Ipsum Dolor Sit Amet</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad accusamus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="news">
        <div class="container my-5 px-3 py-3">
            <h6 class="text-success fw-bold">BERITA</h6>
            <h1 class="fw-bolder">Baca Berita Terbaru Kami</h1>
            <h1 class="fw-bolder">Dalam Tropisianimal</h1>
            <div class="row mt-4 text-black">
                @foreach ($berita as $b)
                    <div class="col-12 col-md-6 col-lg-4 mb-0 mb-md-4 d-flex d-md-blok justify-content-center justify-content-md-start">
                        <div class="card text-center bg-dark bg-opacity-10" style="width: 25rem">
                            <img src="https://source.unsplash.com/400x220/?animal" class="card-img-top img-fluid news-cards" alt="{{ $b->title }}" />
                            <div class="card-body">
                                <a href="/berita/{{ $b->slug }}" class="text-decoration-none text-dark"><h5 class="card-title">{{ $b->title }}</h5></a>
                                <p class="card-text text-muted">{{ $b->excerpt }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="galeri">
        <div class="container-fluid pt-3 mb-5">
            <div class="container px-3">
                <h6 class="text-success fw-bold">GALERI</h6>
                <h1 class="fw-bolder lh-base">Lihat Lebih Banyak Hewan Tropis</h1>
                <h1 class="fw-bolder">Pada Galeri Kami</h1>
            </div>
            <div class="text-center mt-5">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach ($galeri as $g)
                                <div class="carousel-item active">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('storage/' . $g->gambar) }}" alt="{{ $g->nama_gambar }}" class="img-fluid d-block w-100" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection