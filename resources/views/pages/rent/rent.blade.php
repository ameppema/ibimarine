@extends('layout.template')  

@section('title', 'Alquiler')

@section('hero')
<!-- Section Hero - Title -->
<section class="my-5">
    <div class="lg:mt-16 mt-4 border-y-4 border-old-gold py-1  lg:px-16 lg:mx-auto lg:w-max">
        <p class="text-center text-old-black text-2xl uppercase font-bold">{{__('Yacht Rental')}}</p>
    </div>
</section>
@endsection

@section('content')
    

<div class="container md:mx-auto md:flex md:flex-wrap md:columns-2 md:justify-center lg:justify-between md:gap-0 lg:gap-6 xl:gap-x-10 md:w-11/12 xl:w-4/5 lg:border-b-4 lg:border-b-old-gold">

    <!-- Cards -->
    @foreach ($boats as $boat)
        
    <div class="lg:last:ml-0 w-4/5 mx-auto md:mx-0 my-6 xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[28rem]">
        <!-- Card Head -->
        <div class="relative md:h-56 xl:h-72">

            <!-- Recomended Label -->
            @if ($boat->is_recomended)
                @if (session()->get('locale') === 'es')
                <span class="absolute top-0 right-0 h-[150px] w-[150px] flex justify-center items-center overflow-hidden before:content-['Recomendado'] before:absolute before:h-[30px] before:w-[150%] before:bg-old-gold before:rotate-45 before:-translate-y-[26px] before:translate-x-[30px] before:flex before:justify-center before:items-center before:uppercase before:font-bold before:text-white before:text-sm"></span>
                @else
                <span class="absolute top-0 right-0 h-[150px] w-[150px] flex justify-center items-center overflow-hidden before:content-['Recomended'] before:absolute before:h-[30px] before:w-[150%] before:bg-old-gold before:rotate-45 before:-translate-y-[26px] before:translate-x-[30px] before:flex before:justify-center before:items-center before:uppercase before:font-bold before:text-white before:text-sm"></span>
                @endif
            @endif

            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                <img class="rounded-t-[12px]"  src="/storage/{{$boat->getCover()}}" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">{{$boat->name}}</p>
            </div>
        </div>
        <!-- Card body -->
        <div class="md:min-h-[234px] border-x-2 border-b-2 border-old-gold p-4 text-center text-old-black">
            <div>
                <p class="text-sm lg:text-lg lg:leading-6 line-clamp-4">
                   {{$boat->description}}
                </p>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-12"><img class="w-full" src="img/sessa.png" alt="brand imgage"></div>
                <p class="xl:text-2xl text-old-black font-bold">Desde <span class="price">{{$boat->price}}</span><span class="currency">€</span> / Día</p>
            </div>
            <div>
                <a href="{{route('rent.show', ['boat_id'=>$boat->id])}}"><button class="bg-old-gold text-white py-1 px-5 rounded-lg">{{__('Booking')}}</button></a>
            </div>
        </div>
    </div>
    
    @endforeach

{{--   <!-- Cards -->
    <div class="lg:last:ml-0 w-4/5 mx-auto md:mx-0 my-6 xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[28rem]">
        <!-- Card Head -->
        <div class="relative lg:h-56 xl:h-72">

            <!-- Recomended Label -->
            <span class="absolute top-0 right-0 h-[150px] w-[150px] flex justify-center items-center overflow-hidden before:content-['Recomended'] before:absolute before:h-[30px] before:w-[150%] before:bg-old-gold before:rotate-45 before:-translate-y-[26px] before:translate-x-[30px] before:flex before:justify-center before:items-center before:uppercase before:font-bold before:text-white before:text-sm"></span>

            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                <img class="rounded-t-[12px]"  src="./img//home/home-04.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">sessa marine c44</p>
            </div>
        </div>
        <!-- Card body -->
        <div class="border-x-2 border-b-2 border-old-gold p-4 text-center text-old-black">
            <div>
                <p class="text-sm lg:text-lg lg:leading-6">
                    Cras venenatis porta ligula sed suscipit.
                    Ut in vehicula ex. Vivamus fermentum nunc mi,
                    ac condimentum magna porttitor faucibus.
                </p>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-12"><img class="w-full" src="img/sessa.png" alt="brand imgage"></div>
                <p class="xl:text-2xl text-old-black font-bold">Desde <span class="price">1.800</span><span class="currency">€</span> / Día</p>
            </div>
            <div>
                <a href="{{route('rent.show')}}"><button class="bg-old-gold text-white py-1 px-5 rounded-lg">Reservar</button></a>
            </div>
        </div>
    </div>
    <!-- Cards -->
    <div class="lg:last:ml-0 w-4/5 mx-auto md:mx-0 my-6 xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[28rem]">
        <!-- Card Head -->
        <div class="relative lg:h-56 xl:h-72">

            <!-- Recomended Label -->
            <span class="absolute top-0 right-0 h-[150px] w-[150px] flex justify-center items-center overflow-hidden before:content-['Recomended'] before:absolute before:h-[30px] before:w-[150%] before:bg-old-gold before:rotate-45 before:-translate-y-[26px] before:translate-x-[30px] before:flex before:justify-center before:items-center before:uppercase before:font-bold before:text-white before:text-sm"></span>

            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                <img class="rounded-t-[12px]"  src="./img//home/home-04.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">sessa marine c44</p>
            </div>
        </div>
        <!-- Card body -->
        <div class="border-x-2 border-b-2 border-old-gold p-4 text-center text-old-black">
            <div>
                <p class="text-sm lg:text-lg lg:leading-6">
                    Cras venenatis porta ligula sed suscipit.
                    Ut in vehicula ex. Vivamus fermentum nunc mi,
                    ac condimentum magna porttitor faucibus.
                </p>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-12"><img class="w-full" src="img/sessa.png" alt="brand imgage"></div>
                <p class="xl:text-2xl text-old-black font-bold">Desde <span class="price">1.800</span><span class="currency">€</span> / Día</p>
            </div>
            <div>
                <a href="{{route('rent.show')}}"><button class="bg-old-gold text-white py-1 px-5 rounded-lg">Reservar</button></a>
            </div>
        </div>
    </div>
    <!-- Cards -->
    <div class="lg:last:ml-0 w-4/5 mx-auto md:mx-0 my-6 xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[28rem]">
        <!-- Card Head -->
        <div class="relative md:h-56 xl:h-72">

            <!-- Recomended Label -->
            <span class="absolute top-0 right-0 h-[150px] w-[150px] flex justify-center items-center overflow-hidden before:content-['Recomended'] before:absolute before:h-[30px] before:w-[150%] before:bg-old-gold before:rotate-45 before:-translate-y-[26px] before:translate-x-[30px] before:flex before:justify-center before:items-center before:uppercase before:font-bold before:text-white before:text-sm"></span>

            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                <img class="rounded-t-[12px]"  src="./img//home/home-04.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">sessa marine c44</p>
            </div>
        </div>
        <!-- Card body -->
        <div class="border-x-2 border-b-2 border-old-gold p-4 text-center text-old-black">
            <div>
                <p class="text-sm lg:text-lg lg:leading-6">
                    Cras venenatis porta ligula sed suscipit.
                    Ut in vehicula ex. Vivamus fermentum nunc mi,
                    ac condimentum magna porttitor faucibus.
                </p>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-12"><img class="w-full" src="img/sessa.png" alt="brand imgage"></div>
                <p class="xl:text-2xl text-old-black font-bold">Desde <span class="price">1.800</span><span class="currency">€</span> / Día</p>
            </div>
            <div>
                <a href="{{route('rent.show')}}"><button class="bg-old-gold text-white py-1 px-5 rounded-lg">Reservar</button></a>
            </div>
        </div>
    </div>
    <!-- Cards -->
    <div class="lg:last:ml-0 w-4/5 mx-auto md:mx-0 my-6 xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[28rem]">
        <!-- Card Head -->
        <div class="relative lg:h-56 xl:h-72">

            <!-- Recomended Label -->
            <span class="absolute top-0 right-0 h-[150px] w-[150px] flex justify-center items-center overflow-hidden before:content-['Recomended'] before:absolute before:h-[30px] before:w-[150%] before:bg-old-gold before:rotate-45 before:-translate-y-[26px] before:translate-x-[30px] before:flex before:justify-center before:items-center before:uppercase before:font-bold before:text-white before:text-sm"></span>

            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                <img class="rounded-t-[12px]"  src="./img//home/home-04.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">sessa marine c44</p>
            </div>
        </div>
        <!-- Card body -->
        <div class="border-x-2 border-b-2 border-old-gold p-4 text-center text-old-black">
            <div>
                <p class="text-sm lg:text-lg lg:leading-6">
                    Cras venenatis porta ligula sed suscipit.
                    Ut in vehicula ex. Vivamus fermentum nunc mi,
                    ac condimentum magna porttitor faucibus.
                </p>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-12"><img class="w-full" src="img/sessa.png" alt="brand imgage"></div>
                <p class="xl:text-2xl text-old-black font-bold">Desde <span class="price">1.800</span><span class="currency">€</span> / Día</p>
            </div>
            <div>
                <a href="{{route('rent.show')}}"><button class="bg-old-gold text-white py-1 px-5 rounded-lg">Reservar</button></a>
            </div>
        </div>
    </div>
    <!-- Cards -->
    <div class="lg:last:ml-0 w-4/5 mx-auto md:mx-0 my-6 xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[28rem]">
        <!-- Card Head -->
        <div class="relative lg:h-56 xl:h-72">

            <!-- Recomended Label -->
            <span class="absolute top-0 right-0 h-[150px] w-[150px] flex justify-center items-center overflow-hidden before:content-['Recomended'] before:absolute before:h-[30px] before:w-[150%] before:bg-old-gold before:rotate-45 before:-translate-y-[26px] before:translate-x-[30px] before:flex before:justify-center before:items-center before:uppercase before:font-bold before:text-white before:text-sm"></span>

            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                <img class="rounded-t-[12px]"  src="./img//home/home-04.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">sessa marine c44</p>
            </div>
        </div>
        <!-- Card body -->
        <div class="border-x-2 border-b-2 border-old-gold p-4 text-center text-old-black">
            <div>
                <p class="text-sm lg:text-lg lg:leading-6">
                    Cras venenatis porta ligula sed suscipit.
                    Ut in vehicula ex. Vivamus fermentum nunc mi,
                    ac condimentum magna porttitor faucibus.
                </p>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-12"><img class="w-full" src="img/sessa.png" alt="brand imgage"></div>
                <p class="xl:text-2xl text-old-black font-bold">Desde <span class="price">1.800</span><span class="currency">€</span> / Día</p>
            </div>
            <div>
                <a href="{{route('rent.show')}}"><button class="bg-old-gold text-white py-1 px-5 rounded-lg">Reservar</button></a>
            </div>
        </div>
    </div> --}}
</div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection