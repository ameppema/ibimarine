@extends('layout.template')  

@section('title', 'Venta')

@section('hero')
    <!-- Section Hero - Title -->
    <section class="my-5">
        <div class="lg:mt-16 mt-4 border-y-4 border-old-gold py-1  lg:px-16 lg:mx-auto lg:w-max">
           <p class="text-center text-old-black text-2xl uppercase font-bold">{{__('Sale Of Yachts')}}</p>
        </div>
    </section>
@endsection

@section('content')
    
<div class="container md:mx-auto md:flex md:flex-wrap md:columns-2 md:justify-center md:gap-0 lg:gap-6 xl:gap-x-10 md:w-11/12 xl:w-4/5 lg:border-b-4 lg:border-b-old-gold">

    <!-- Cards -->
    @foreach ($boats as $boat)
    <div class="lg:last:ml-0 w-4/5 mx-auto md:mx-0 my-6 xl:max-w-[30rem] sm:max-w-[300px] lg:max-w-[28rem]">
        <!-- Card Head -->
        <div class="relative md:h-56 xl:h-72">
        <a href="{{route('sale.show', ['boat_slug'=>$boat->slug])}}">
            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-hidden">
                <img class="rounded-t-[12px] grayscale hover:grayscale-0 hover:scale-110 transition ease-in-out duration-300 overflow-hidden"  src="/storage/{{$boat->getCover()}}" alt="Boat Card">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">{{ $boat->name }}</p>
            </div>
        </a>
        </div>
        <!-- Card body -->
        <div class="flex flex-col justify-center md:h-[234px] md:min-h-[234px] border-x-2 border-b-2 border-old-gold p-4 text-center text-old-black">
            <div>
                <p class="text-sm lg:text-lg lg:leading-6 line-clamp-3">
                    {{ $boat->description }}
                </p>
            </div>
            <div class="flex justify-center my-5">
                <!-- <div class="w-20"><img class="w-full" src="/storage/{{$boat->brand->image}}" alt="brand imgage"></div> -->
            </div>
            <div>
                <a href="{{route('sale.show', ['boat_slug'=>$boat->slug])}}"><button class="bg-old-gold text-white py-1 px-5 rounded-lg">{{__('See Info.')}}</button></a>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection