@extends('layout.template')

@section('title', 'Home')

@section('content')

<!-- Section Content -->
<div class="content">
    <div class="container home__grid">
        <!-- Main Card -->
        <a class="card" href="alquiler.html">
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

        <a class="card" href="venta.html">
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

        <a class="card" href="complementos.html">
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

        <a class="card" href="eventos.html">
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

        <a class="card" href="noticias.html">
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
        <a class="card" href="contacto.html">
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