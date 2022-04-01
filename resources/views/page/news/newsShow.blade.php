@extends('layout.template')

@section('title', 'Noticias y Life Style')

@section('hero')
    <!-- Hero -->
    <div class="hero__content">
        <div class="hero-container">
            <h1 class="margin-1 text-title text-center text-upper text-bold text-color-black">Noticias y Life Style</h1>
        </div>
    </div>
@endsection

@section('content')
    <!-- Section Content -->
    <div class="content">
        <div class="container">
            <!-- Card -->
            <div class="card">
                <div class="card-head">
                    <div class="card__img">
                        <img class="img-fluid smooth-top-corners" src="img/news/news-01.jpeg" alt="card image">
                    </div>
                </div>
                <div class="card-body-no-border">
                    <div class="card__text text-center margin-bottom-1">
                        <p class="text-color-black margin-vertical-1 padding-horizontal-1">
                            Cras venenatis porta ligula sed suscipit.
                            Ut in vehicula ex. Vivamus fermentum nunc mi,
                            ac condimentum magna porttitor faucibus.
                            Cras venenatis porta ligula sed suscipit.
                            Ut in vehicula ex. Vivamus fermentum nunc mi,
                            ac condimentum magna porttitor faucibus.
                            ac condimentum magna porttitor faucibus.
                            Cras venenatis porta ligula sed suscipit.
                            Ut in vehicula ex. Vivamus fermentum nunc mi,
                            ac condimentum magna porttitor faucibus.
                            <br>
                            <br>
                            Vestibulum ante ipsum primis in faucibus                            id leo fermentum quam gravida ut.
                            Vestibulum ante ipsum primis in faucibus
                            orci luctus et ultrices posuere cubila curae;
                            sed non lorem at felis tincidunt lacinia nec
                            id leo fermentum quam gravida ut.
                            sed non lorem at felis tincidunt lacinia nec
                            id leo fermentum quam gravida ut.
                        </p>

                        <!-- Back Button -->
                        <a href="noticias.html">
                            <button class="button button-golden margin-vertical-1">Volver a Noticias y Life Style</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection