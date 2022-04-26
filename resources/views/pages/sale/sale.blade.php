@extends('layout.template')  

@section('title', 'Venta')

@section('hero')
    <!-- Section Hero - Title -->
    <section class="my-5">
        <div class="lg:mt-16 mt-4 border-y-4 border-old-gold py-1  lg:px-16 lg:mx-auto lg:w-max">
           <p class="text-center text-old-black text-2xl uppercase font-bold">Venta de Yates</p>
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

            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-y-hidden">
                <img class="rounded-t-[12px]"  src="/storage/{{$boat->getCover()}}" alt="Boat Card">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">{{ $boat->name }}</p>
            </div>
        </div>
        <!-- Card body -->
        <div class="md:h-[234px] md:min-h-[234px] border-x-2 border-b-2 border-old-gold p-4 text-center text-old-black">
            <div>
                <p class="text-sm lg:text-lg lg:leading-6 line-clamp-3">
                    {{ $boat->description }}
                </p>
            </div>
            <div class="flex justify-center my-5">
                <div class="w-20"><img class="w-full" src="img/sessa.png" alt="brand imgage"></div>
            </div>
            <div>
                <a href="{{route('sale.show', ['boat_id'=>$boat->id])}}"><button class="bg-old-gold text-white py-1 px-5 rounded-lg">Ver info.</button></a>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Cards -->
    <div class="lg:last:ml-0 w-4/5 mx-auto md:mx-0 my-6 xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[28rem]">
        <!-- Card Head -->
        <div class="relative md:h-56 xl:h-72">

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
                <div class="w-20"><img class="w-full" src="img/sessa.png" alt="brand imgage"></div>
            </div>
            <div>
                <a href="{{route('sale.show')}}"><button class="bg-old-gold text-white py-1 px-5 rounded-lg">Ver info.</button></a>
            </div>
        </div>
    </div>

</div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection