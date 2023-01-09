@extends('layouts.layout')

@section('content')

<section id="home">
    <!-- Hero Slider -->
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item text-center bg-cover vh-100 active slide-1">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h6 class="text-white">Welcome To PetaniQ</h6>
                            <h1 class="display-1 my-3 fw-bold text-white mb-5">Petani Keren, Petani Sukses, & Petani Kaya</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item text-center bg-cover vh-100 slide-2">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h6 class="text-white">Welcome To PetaniQ</h6>
                            <h1 class="display-1 my-3 fw-bold text-white">Fresh & Healthy Food</h1>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

        {{-- About --}}
        <section id="about" style="padding-top: 120px; padding-bottom: 120px;">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <img src="./frontend/img/PetaniKlaten.png" alt="" frameborder="0" width="450" height="500">
                </div>
                <div class="col-lg-6 col-lg-6 col-md-8 col-sm-10">
                    <h1>Tentang Kami</h1>
                    <div class="divider my-4"></div>
                    <p>Berawal dari grup melalui platform media sosial berkumpullah 5 orang penggagas "Komunitas Petani Muda Klaten". Salah satu alasan dibentuknya komunitas petani muda klaten ini dikarenakan semakin sedikitnya minat anak muda yang berprofesi sebagai petani dan banyaknya lahan kosong tidak digarap. Badan Pusat Statistik (BPS) mencatat jumlah petani per 2019 mencapai 33,4 juta orang.</p>
                    <p>Adapun dari jumlah tersebut, petani muda di Indonesia yang berusia 20-39 tahun hanya 8% atau setara dengan 2,7 juta orang. Melihat fakta tersebut maka dibentuklah sebuah komunitas petani muda klaten dengan harapan anak-anak muda mau dan menjadikan pertanian sebagai bisnis mereka. Mengusung Semangat “Petani Keren”, “Petani Sukses”, “Petani Kaya”.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- features --}}
    <section id="features" class="bg-cover" style="padding-top: 120px; padding-bottom: 120px;">
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1 class="text-white mb-5">Mengapa Memilih kami?</h1>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="feature p-4 text-center">
                        <div class="feature-icon">
                            <i class="ri-plant-fill"></i>
                        </div>
                        <h4 class="text-white mt-4 mb-2">Fresh Product</h4>
                        <p class="text-white">
                            Produk yang kami berikan sangat fresh dan sehat untuk dikonsumsi oleh kalian
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature p-4 text-center">
                        <div class="feature-icon">
                            <i class="ri-timer-2-fill"></i>
                        </div>
                        <h4 class="text-white mt-4 mb-2">Fast Delivery</h4>
                        <p class="text-white">Layanan pengiriman Produk kami cepat, sehingga Anda tidak perlu menunggu lama
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature p-4 text-center">
                        <div class="feature-icon">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <h4 class="text-white mt-4 mb-2">Friendly Staff</h4>
                        <p class="text-white">
                            Kami mempunyai staff yang baik dan ramah sehingga anda akan menyukainya
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature p-4 text-center">
                        <div class="feature-icon">
                            <i class="ri-shield-star-fill"></i>
                        </div>
                        <h4 class="text-white mt-4 mb-2">Highly Rated</h4>
                        <p class="text-white">Kami menjamin kualitas dan kuantitas produk dengan kualitas tinggi
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Team --}}
    <section id="team" style="padding-top: 120px; padding-bottom: 120px;">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1 class="mb-5">PetaniQ Team</h1>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member px-4 py-5 border shadow-on-hover text-center">
                        <img src="./frontend/img/Zaky.png" alt="">
                        <div class="team-member-content">
                            <h4 class="mb-2 mt-4">Afif Zaky</h4>
                            <p class="mb-0">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member px-4 py-5 border shadow-on-hover text-center">
                        <img src="./frontend/img/Agung.png" alt="">
                        <div class="team-member-content">
                            <h4 class="mb-2 mt-4">Bimo Agung</h4>
                            <p class="mb-0">Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member px-4 py-5 border shadow-on-hover text-center">
                        <img src="./frontend/img/Abdul.png" alt="">
                        <div class="team-member-content">
                            <h4 class="mb-2 mt-4">Wahyu Ghofar</h4>
                            <p class="mb-0">System Analyis</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member px-4 py-5 border shadow-on-hover text-center">
                        <img src="./frontend/img/Yusuf.png" alt="">
                        <div class="team-member-content">
                            <h4 class="mb-2 mt-4">Wakhid Yusuf</h4>
                            <p class="mb-0">UI/UX</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        {{-- Location --}}
        <section id="location" style="padding-top: 120px; padding-bottom: 120px;">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1 class="text-white">Lokasi Kami</h1>
                    <p class="text-white">Temukan lokasi kami di google map atau klik gambar di bawah ini</p><br>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15818.847937307442!2d110.59678379895021!3d-7.606288319548181!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x12375224e5a9e00e!2sGriya%20kompos%20Aji%20Berkah%20Tani!5e0!3m2!1sid!2sid!4v1673264913541!5m2!1sid!2sid" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

</section>
    {{-- Footer --}}
    <!-- footer -->
    <footer class="bg-cover">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4">
                        <img src="./frontend/img/Logo23.png" class="mb-4" alt="">
                        <div class="social-links">
                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                            <a href="#"><i class="ri-github-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 ms-auto">
                        <h6 class="text-white mb-4">KONTAK</h6>
                        <p class="mb-1">Call us : (03) 9283 4726</p>
                        <p class="mb-1">Email : PetaniQ@gmail.com</p>
                        <p class="mb-0">Address : Jl. Tlogowono, Bono, Kec. Tulung, Kabupaten Klaten, Jawa Tengah</p>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="text-white mb-4">JAM KERJA</h6>
                        <p class="mb-1">Monday-Friday : 08:00 - 22:00</p>
                        <p>Sturday-Sunday : 08:00 - 23:00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row gy-3 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Copyrights all rights reserved</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Created By PetaniQ</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
