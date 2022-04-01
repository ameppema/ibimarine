@extends('layout.template')

@section('title', 'Home')

@section('hero')
<!-- Hero -->
<div class="hero__content">
    <div class="hero-container">
        <img class="img-fluid" src="img/home/home-06.jpg" alt="Hero Image">
    </div>
</div>
@endsection

@section('content')

<!-- Section Content -->
<div class="content">
    <div class="container home__grid">
        <!-- Main Card -->
        <a class="card" href="{{route('rent')}}">
        <div >
            <div class="card-head">
                <div class="card__img ">
                    <img class="img-fluid smooth-top-corners" src="img/home/home-04.jpg" alt="card image">
                </div>
                <div class="card__title">
                    <p class="text-center text-upper">Alquiler de yates</p>
                </div>
            </div>
        </div>
        </a>

        <a class="card" href="{{route('sale')}}">
        <div>
            <div class="card-head">
                <div class="card__img">
                    <img class="img-fluid smooth-top-corners" src="img/home/home-05.jpg" alt="card image">
                </div>
                <div class="card__title">
                    <p class="text-center text-upper">Venta de yates</p>
                </div>
            </div>
        </div>
        </a>

        <a class="card" href="{{route('toys')}}">
        <div>
            <div class="card-head">
                <div class="card__img">
                    <img class="img-fluid smooth-top-corners" src="img/home/home-03.jpg" alt="card image">
                </div>
                <div class="card__title">
                    <p class="text-center text-upper">Complementos Nauticos</p>
                </div>
            </div>
        </div>
        </a>

        <a class="card" href="{{route('events')}}">
        <div>
            <div class="card-head">
                <div class="card__img">
                    <img class="img-fluid smooth-top-corners" src="img/home/home-01.jpg" alt="card image">
                </div>
                <div class="card__title">
                    <p class="text-center text-upper">Eventos</p>
                </div>
            </div>
        </div>
        </a>

        <a class="card" href="{{route('news')}}">
        <div>
            <div class="card-head">
                <div class="card__img">
                    <img class="img-fluid smooth-top-corners" src="img/home/home-02.jpg" alt="card image">
                </div>
                <div class="card__title">
                    <p class="text-center text-upper">Noticias y LifeStyle</p>
                </div>
            </div>
        </div>
        </a>
        <a class="card" href="{{route('contact')}}">
        <div>
            <div class="card-head">
                <div class="card__img">
                    <img class="img-fluid smooth-top-corners" src="img/contact/contact.jpeg" alt="card image">
                </div>
                <div class="card__title">
                    <p class="text-center text-upper">Contacto</p>
                </div>
            </div>
        </div>
        </a>
        <!-- /Cards -->
    </div>
</div>

@endsection