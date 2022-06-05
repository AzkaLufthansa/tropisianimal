@extends('layouts.main')

@section('content')
    <section id="contact-us" class="container-fluid">
        <div class="container my-5 pb-1">
            <div class="row mx-1">
                <div class="col-12 map-container-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.558806782065!2d107.66398729999999!3d-6.9432114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c381e3c323%3A0x5f5160f6c9796e4b!2sCyberLabs%20%7C%20Digital%20Marketing%20Company!5e0!3m2!1sid!2sid!4v1653489649515!5m2!1sid!2sid"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
            <div class="row pt-5">
                <h2 class="fw-bolder pb-3">Kontak Kami</h2>
                <div class="col-md-9 col-12">
                    <textarea class="form-control" id="description" placeholder="Description" rows="8"></textarea>
                </div>
                <div class="col-md-3 col-12 pt-3 pt-md-0">
                    <input type="email" class="form-control mb-3" id="subject" placeholder="Subject" />
                    <input type="" class="form-control mb-3" id="name" placeholder="Name" />
                    <input type="" class="form-control mb-4" id="email" placeholder="Email" />
                    <div class="d-grid mx-0">
                        <button type="button" class="btn btn-success text-center">Kirim<i class="fa-regular fa-paper-plane px-2"></i></button>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-lg-4 col-md-6 col-sm-12 text-center">
                    <div class="rounded-circle bg-success col-2 mx-auto py-4 py-md-3 mb-3">
                        <img src="assets/mail.svg" alt="" style="width: 25px" />
                    </div>
                    <h6>Email</h6>
                    <p class="text-muted">tropisianimal@gmail.com</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pt-3 pt-md-0 text-center">
                    <div class="rounded-circle bg-success col-2 mx-auto py-4 py-md-3 mb-3">
                        <img src="assets/phone.svg" alt="" style="width: 25px" />
                    </div>
                    <h6>Phone</h6>
                    <p class="text-muted">+62 812 3456 7890</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 pt-3 pt-md-0 text-center">
                    <div class="rounded-circle bg-success col-2 mx-auto py-4 py-md-3 mb-3">
                        <img src="assets/map-pin.svg" alt="" style="width: 23px" />
                    </div>
                    <h6>Location</h6>
                    <p class="text-muted col-7 mx-auto">Kota Bandung, Jawa Barat Indonesia</p>
                </div>
            </div>
        </div>
    </section>
@endsection