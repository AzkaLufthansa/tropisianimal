<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
        <!-- Link Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

        <title>Tropisianimal</title>
        <link rel="shortcut icon" href="assets/web-icon.png" type="image/x-icon" />
    </head>
    <body>
        <section id="banner">
            <div class="banner-non-landing container-fluid pt-2">
                <div class="container">
                    <nav class="navbar navbar-expand-sm navbar-dark">
                        <div class="container-fluid">
                            <a class="navbar-brand fw-bolder" href="#">Tropisianimal</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item mx-sm-4 mx-md-2 mx-xl-4">
                                        <a class="nav-link" aria-current="page" href={{ route('index') }}>HOME</a>
                                    </li>
                                    <li class="nav-item mx-sm-4 mx-md-2 mx-xl-4">
                                        <a class="nav-link" href={{ route('tentang') }}>TENTANG</a>
                                    </li>
                                    <li class="nav-item mx-sm-4 mx-md-2 mx-lg-4">
                                        <a class="nav-link" href={{ route('berita') }}>BERITA</a>
                                    </li>
                                    <li class="nav-item mx-sm-4 mx-md-2 mx-xl-4">
                                        <a class="nav-link active" href={{ route('galeri') }}>GALERI</a>
                                    </li>
                                    <li class="nav-item mx-sm-4 mx-md-2 mx-xl-4">
                                        <a class="nav-link" href={{ route('kontak') }}>KONTAK</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="heading container pt-5 mt-5">
                        <div class="text-start col-sm-5 col-md-9 col-lg-5">
                            <h1 class="fw-bolder">Galeri</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

        <section class="footer">
            <div class="container-fluid bg-dark">
                <div class="container">
                    <footer class="row py-5 text-white d-sm-flex flex-sm-wrap">
                        <div class="col-12 col-md-3">
                            <h5 class="lh-lg">Tropisianimal</h5>
                            <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore beatae officia commodi fuga dolor</p>
                            <div class="d-flex gap-4 mb-3">
                                <a href=""><img src="assets/Facebook.png" alt="" style="width: 35px" /></a>
                                <a href=""><img src="assets/Twitter.png" alt="" width="35px" /></a>
                            </div>
                        </div>

                        <div class="col-5 col-md-2 py-1 py-md-0 offset-lg-4 offset-md-3">
                            <h5>Useful links</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href={{ route('index') }} class="nav-link p-0 text-white fw-light">Home</a></li>
                                <li class="nav-item mb-2"><a href={{ route('tentang') }} class="nav-link p-0 text-white fw-light">Tentang</a></li>
                                <li class="nav-item mb-2"><a href={{ route('berita') }} class="nav-link p-0 text-white fw-light">Berita</a></li>
                                <li class="nav-item mb-2"><a href={{ route('galeri') }} class="nav-link p-0 text-white fw-light">Galeri</a></li>
                                <li class="nav-item mb-2"><a href={{ route('kontak') }} class="nav-link p-0 text-white fw-light">Kontak</a></li>
                            </ul>
                        </div>

                        <div class="col-9 col-md-3">
                            <h5>Contact Info</h5>
                            <ul class="nav flex-column pt-2">
                                <li class="nav-item d-flex pb-2">
                                    <div class="flex-shrink-0">
                                        <img src="assets/mail.svg" alt="" style="width: 25px" class="img-fluid" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="nav-link p-0 text-white fw-light lh-1 mt-1">tropisianimal@gmail.com</p>
                                    </div>
                                </li>
                                <li class="nav-item d-flex pb-2">
                                    <div class="flex-shrink-0">
                                        <img src="assets/phone.svg" alt="" style="width: 25px" class="img-fluid" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="nav-link p-0 text-white fw-light lh-1 mt-1">+62 812 3456 7890</p>
                                    </div>
                                </li>
                                <li class="nav-item d-flex">
                                    <div class="flex-shrink-0">
                                        <img src="assets/map-pin.svg" alt="" style="width: 25px" class="img-fluid" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <p class="nav-link p-0 text-white fw-light lh-1 mt-1">Kota Bandung, Jawa Barat</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <div class="py-2">
                        <p class="text-center text-muted">Copyright &copy; 2020 All rights reserved</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Optional JavaScript; choose one of the two! -->
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/70ad8b1643.js" crossorigin="anonymous"></script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
