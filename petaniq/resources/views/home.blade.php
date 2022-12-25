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
        <div class="container mb-5">
            <div class="row justify-content-center">
                <h1 class="text-center mt-5 mb-5">Tentang Kami</h1>
                <div class="col-10">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Velit vel odio ligula dolor bibendum diam lacus morbi volutpat. Amet consequat tellus proin volutpat risus nulla. Nullam molestie eu sem fames lectus metus proin ultricies. Commodo diam pretium in sed neque, venenatis. Nunc nisl metus tincidunt adipiscing et quis. Mattis orci feugiat condimentum vel, at ullamcorper nibh placerat. Sed cursus urna facilisis varius tristique. Elit lobortis cursus faucibus suspendisse nulla aenean maecenas et. Consequat dui eros, eget eu odio euismod. Non id rhoncus tempor ut pharetra enim dictumst tristique. Bibendum suspendisse pulvinar lacus felis volutpat egestas commodo a quam. Malesuada tempus rhoncus amet fermentum nunc.
                </div>
            </div>
        </div>

        {{-- Location --}}
        <div class="container text-center mb-5">
            <div class="row justify-content-md-center">
                <div class="com-md-auto mt-4">
                    <h1 class="mb-5">Lokasi Kami</h1>
                    <div class="col-10 col-md-8 col-sm-4 ratio ratio-16x9">   
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15841.03256393147!2d107.63338159999999!3d-6.978837799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1665756928787!5m2!1sen!2sid"></iframe>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="text-center p-3 text-dark" style="background-color: #238E68;">
            © Copyright 2022 PetaniQ
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
        </div>
</section>
@endsection