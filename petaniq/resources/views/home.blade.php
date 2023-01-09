@extends('layouts.layout')

@section('content')

<section id="home">
        <!-- Hero -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">         </button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./frontend/img/Banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./frontend/img/Banner.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./frontend/img/Banner.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- About --}}
        <div class="container mb-5 page-section p-5">
            <div class="row justify-content-center">
                <h1 id="about" class="text-center mt-5 mb-5">Tentang Kami oke</h1>
                <div class="col-10">
                    Petaniq merupakan platform yang membantu petani menjual hasil panen mereka secara online, serta membantu pembeli menemukan produk pertanian berkualitas dengan harga terbaik. Selain layanan jual beli hasil panen, Petaniq juga menyediakan jasa konsultasi yang akan membantu petani dan pembeli meningkatkan produktivitas dan efisiensi bisnis pertanian mereka. Petaniq menyediakan solusi terbaik bagi semua pihak yang terlibat dalam bisnis pertanian dengan memberikan kemudahan dalam bertransaksi, baik bagi petani yang ingin menjual hasil panen mereka maupun pembeli yang mencari produk pertanian berkualitas. Dengan Petaniq, petani dapat menjual hasil panen mereka kepada pembeli di seluruh Indonesia, sementara pembeli dapat membeli hasil panen dengan mudah dan cepat.                </div>
            </div>
        </div>

        {{-- Location --}}
        <div class="container text-center mb-5 page-section p-5">
            <div class="row justify-content-md-center">
                <div class="com-md-auto mt-4">
                    <h1 id='location' class="mb-5">Lokasi Kami</h1>
                    <div class="col-10 col-md-8 col-sm-4 ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15841.03256393147!2d107.63338159999999!3d-6.978837799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1665756928787!5m2!1sen!2sid"></iframe>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="text-center p-3 text-light" style="background-color: #238E68;">
            © Copyright 2022 PetaniQ
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
        </div>
</section>
@endsection
