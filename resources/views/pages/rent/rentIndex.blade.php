@extends('layout.template')

@section('title', 'Alquiler')

@section('hero')
    <!-- Hero -->
    <div class="hero__content text-center">
        <div class="hero-container hero-container-text">
            <h1 style="display: inline-block;" class="margin-1 text-title text-center text-upper text-bold text-color-black">Alquiler de Yates</h1>
        </div>
    </div>
@endsection

@section('content')
    <!-- Section Content -->
    <div class="content">
        <div class="container home__grid">
            <!-- Card -->
            <div class="card">
                <div class="card-head">

                    <span class="label label-es"></span>

                    <div class="card__img">
                        <img class="img-fluid smooth-top-corners" src="img/home/home-04.jpg" alt="card image">
                    </div>
                    <div class="card__title">
                        <p class="text-center text-upper">Sessa Marine c44</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card__text text-center margin-bottom-1">
                        <p class="text-color-black margin-vertical-1 padding-horizontal-1">
                            Cras venenatis porta ligula sed suscipit.
                            Ut in vehicula ex. Vivamus fermentum nunc mi,
                            ac condimentum magna porttitor faucibus.
                        </p>
                    </div>
                    <div class="card__price text-center margin-vertical-1">
                        <span class="brand-icon-small"><img class="img-fluid" src="img/sessa.png" alt="brand imgage"></span>
                        <p class="card-text text-color-black text-bold">Desde <span class="price">1.800</span><span class="currency">€</span> / Día</p>
                    </div>
                    <div class="text-center margin-vertical-1"><a href="alquiler_show.html"><button class="button button-golden">Reservar</button></a></div>
                </div>
            </div>
            <!-- Card -->
            <div class="card">
                <div class="card-head">
                    <div class="card__img">
                        <img class="img-fluid smooth-top-corners" src="img/rent/rent-01.jpg" alt="card image">
                    </div>
                    <div class="card__title">
                        <p class="text-center text-upper">Sessa Marine c44</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card__text text-center margin-bottom-1">
                        <p class="text-color-black margin-vertical-1 padding-horizontal-1">
                            Cras venenatis porta ligula sed suscipit.
                            Ut in vehicula ex. Vivamus fermentum nunc mi,
                            ac condimentum magna porttitor faucibus.
                        </p>
                    </div>
                    <div class="card__price text-center margin-vertical-1">
                        <span class="brand-icon-small"><img class="img-fluid" src="img/sessa.png" alt="brand imgage"></span>
                        <p class="card-text text-color-black text-bold">Desde <span class="price">1.800</span><span class="currency">€</span> / Día</p>
                    </div>
                    <div class="text-center margin-vertical-1"><a href="alquiler_show.html"><button class="button button-golden">Reservar</button></a></div>
                </div>
            </div>
            <!-- Card -->
            <div class="card"> 
                
                <div class="card-head">

                    <!-- recomended label -->
                    <span class="label label-en"></span>
                    
                    <div class="card__img recomended">
                        <img class="img-fluid smooth-top-corners" src="img/rent/rent-04.jpeg" alt="card image">
                    </div>
                    <div class="card__title">
                        <p class="text-center text-upper">Sessa Marine c44</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card__text text-center margin-bottom-1">
                        <p class="text-color-black margin-vertical-1 padding-horizontal-1">
                            Cras venenatis porta ligula sed suscipit.
                            Ut in vehicula ex. Vivamus fermentum nunc mi,
                            ac condimentum magna porttitor faucibus.
                        </p>
                    </div>
                    <div class="card__price text-center margin-vertical-1">
                        <span class="brand-icon-small"><img class="img-fluid" src="img/sessa.png" alt="brand imgage"></span>
                        <p class="card-text text-color-black text-bold">Desde <span class="price">1.800</span><span class="currency">€</span> / Día</p>
                    </div>
                    <div class="text-center margin-vertical-1"><a href="alquiler_show.html"><button class="button button-golden">Reservar</button></a></div>
                </div>
            </div>
            <!-- Card -->
            <div class="card"> 
                
                <div class="card-head">

                    <!-- recomended label -->
                    <span class="label label-en"></span>
                    
                    <div class="card__img recomended">
                        <img class="img-fluid smooth-top-corners" src="img/rent/rent-02.jpeg" alt="card image">
                    </div>
                    <div class="card__title">
                        <p class="text-center text-upper">Sessa Marine c44</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card__text text-center margin-bottom-1">
                        <p class="text-color-black margin-vertical-1 padding-horizontal-1">
                            Cras venenatis porta ligula sed suscipit.
                            Ut in vehicula ex. Vivamus fermentum nunc mi,
                            ac condimentum magna porttitor faucibus.
                        </p>
                    </div>
                    <div class="card__price text-center margin-vertical-1">
                        <span class="brand-icon-small"><img class="img-fluid" src="img/sessa.png" alt="brand imgage"></span>
                        <p class="card-text text-color-black text-bold">Desde <span class="price">1.800</span><span class="currency">€</span> / Día</p>
                    </div>
                    <div class="text-center margin-vertical-1"><a href="alquiler_show.html"><button class="button button-golden">Reservar</button></a></div>
                </div>
            </div>
        </div>
    </div>
@endsection