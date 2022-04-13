@extends('layout.template')

@section('title', 'Toys')

@section('hero')

    <!-- Section Hero - Title -->
    <section class="my-5">
        <div class="border-y-4 border-old-gold py-2  lg:px-16 lg:mx-auto lg:w-max">
           <p class="text-center text-old-black text-2xl uppercase font-bold">Toys</p>
        </div>
    </section>
@endsection

@section('content')
<div class="container md:mx-auto md:flex md:flex-wrap md:columns-2 md:justify-center md:gap-x-10 lg:w-4/5 lg:border-b-4 lg:border-b-old-gold">

    <!-- Cards -->
        <div class="w-4/5 mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[23rem]">
            <!-- Card Head -->
            <div class="relative lg:h-56 xl:h-72">

                <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                    <img class="rounded-t-[12px]"  src="./img//home/home-04.jpg" alt="">
                </div>
                <div class="absolute bottom-0 md:-bottom-9  lg:-bottom-4 h-8 md:h-12 md:bg-opacity-0 bg-old-gold w-full text-center">
                    <p class="text-white md:text-old-black leading-8 md:leading-[3rem] text-lg xl:text-2xl uppercase md:font-bold">sessa marine c44</p>
                </div>
            </div>
            <!-- Card body -->
            <div class="border-x-2 md:border-none border-b-2 border-old-gold p-4 md:pt-8 lg:pt-4 text-center text-old-black">
                <div>
                    <p class="text-sm lg:text-lg">
                        Cras venenatis porta ligula sed suscipit.
                        Ut in vehicula ex. Vivamus fermentum nunc mi.
                    <br>
                    <br>
                        Cras venenatis porta ligula sed suscipit.
                        Ut in vehicula ex. Vivamus fermentum nunc mi,
                        ac condimentum magna porttitor faucibus.
                        Ut in vehicula ex. Vivamus fermentum nunc 

                    </p>
                </div>
            </div>


        </div>   
    <!-- Cards -->
        <div class="w-4/5 mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[23rem]">
            <!-- Card Head -->
            <div class="relative lg:h-56 xl:h-72">

                <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                    <img class="rounded-t-[12px]"  src="./img//home/home-04.jpg" alt="">
                </div>
                <div class="absolute bottom-0 md:-bottom-9  lg:-bottom-4 h-8 md:h-12 md:bg-opacity-0 bg-old-gold w-full text-center">
                    <p class="text-white md:text-old-black leading-8 md:leading-[3rem] text-lg xl:text-2xl uppercase md:font-bold">sessa marine c44</p>
                </div>
            </div>
            <!-- Card body -->
            <div class="border-x-2 md:border-none border-b-2 border-old-gold p-4 md:pt-8 lg:pt-4 text-center text-old-black">
                <div>
                    <p class="text-sm lg:text-lg">
                        Cras venenatis porta ligula sed suscipit.
                        Ut in vehicula ex. Vivamus fermentum nunc mi.
                    <br>
                    <br>
                        Cras venenatis porta ligula sed suscipit.
                        Ut in vehicula ex. Vivamus fermentum nunc mi,
                        ac condimentum magna porttitor faucibus.
                        Ut in vehicula ex. Vivamus fermentum nunc 

                    </p>
                </div>
            </div>


        </div>   
    <!-- Cards -->
        <div class="w-4/5 mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[23rem]">
            <!-- Card Head -->
            <div class="relative lg:h-56 xl:h-72">

                <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                    <img class="rounded-t-[12px]"  src="./img//home/home-04.jpg" alt="">
                </div>
                <div class="absolute bottom-0 md:-bottom-9  lg:-bottom-4 h-8 md:h-12 md:bg-opacity-0 bg-old-gold w-full text-center">
                    <p class="text-white md:text-old-black leading-8 md:leading-[3rem] text-lg xl:text-2xl uppercase md:font-bold">sessa marine c44</p>
                </div>
            </div>
            <!-- Card body -->
            <div class="border-x-2 md:border-none border-b-2 border-old-gold p-4 md:pt-8 lg:pt-4 text-center text-old-black">
                <div>
                    <p class="text-sm lg:text-lg">
                        Cras venenatis porta ligula sed suscipit.
                        Ut in vehicula ex. Vivamus fermentum nunc mi.
                    <br>
                    <br>
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