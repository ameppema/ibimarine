@extends('layout.template')

@section('title', 'Contacto')

@section('hero')
    <!-- Hero -->
    <section class="my-5">
        <div class="border-y-4 border-old-gold py-2  lg:px-16 lg:mx-auto lg:w-max">
           <p class="text-center text-old-black text-2xl uppercase font-bold">Contact</p>
        </div>
    </section>
@endsection

@section('content')
<div class="container lg:mx-auto lg:flex lg:flex-wrap lg:columns-2 lg:justify-center lg:w-4/5 lg:border-b-4 lg:border-b-old-gold">

    <!-- Cards -->
        <div class="w-4/5 mx-auto my-6 md:max-w-[340px] lg:max-w-full lg:w-full sm:max-w-[300px]">
            <!-- Card Head -->
            <div class="relative lg:h-56 xl:h-96">

                <div class="rounded-t-lg max-h-[200px] xl:max-h-full overflow-y-hidden">
                    <img class="mx-auto rounded-t-[12px]"  src="/img/contact/contact_ibimarine.jpg" alt="">
                </div>
            </div>
            <!-- Card body -->
            <div class="p-4 lg:py-6 lg:px-32 text-center text-old-black">
                <div>
                    <p class="text-sm xl:text-xl">
                        Cras venenatis porta ligula sed suscipit.
                        Ut in vehicula ex. Vivamus fermentum nunc mi.
                    </p>
                    <br>
                    <p class="text-sm xl:text-xl">
                        Cras venenatis porta ligula sed suscipit.
                        Ut in vehicula ex. Vivamus fermentum nunc mi,
                        ac condimentum magna porttitor faucibus.
                        Ut in vehicula ex. Vivamus fermentum nunc 
                    </p>
                </div>
            </div>


        </div>
   
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection