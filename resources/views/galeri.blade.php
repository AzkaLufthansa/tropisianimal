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
                <div class="col-6 pb-5 pb-md-0 col-md-3">
                    <img src="assets/cards/cards-1.png" alt="" class="img-fluid" />
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/cards/cards-2.png" alt="" class="img-fluid" />
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/cards/cards-3.png" alt="" class="img-fluid" />
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/cards/cards-4.png" alt="" class="img-fluid" />
                </div>
            </div>
            <div class="row pt-2 pt-md-0">
                <div class="col-6 pb-5 pb-md-0 col-md-3">
                    <img src="assets/cards/cards-5.png" alt="" class="img-fluid" />
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/cards/cards-7.png" alt="" class="img-fluid" />
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/cards/cards-6.png" alt="" class="img-fluid" />
                </div>
                <div class="col-6 col-md-3">
                    <img src="assets/cards/cards-8.png" alt="" class="img-fluid" />
                </div>
            </div>
        </div>
    </section>
@endsection