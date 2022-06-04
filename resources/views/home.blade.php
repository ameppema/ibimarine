@extends('layout.template')  

@section('title', 'Home')

@section('hero')
    <!-- Section Hero - Title -->
    <section class="my-5">
        <div class="border-y-8 border-old-gold">
            <div class="h-48 overflow-hidden lg:h-[32rem]">
                <img class="w-full object-cover lg:object-center" style="height:100%;" src="/storage/{{ TheHero()->image_src }}" alt="Hero Image">
            </div>
        </div>
    </section>
@endsection

@section('content')
    
<div class="container xl:w-4/5 lg:w-11/12 lg:mx-auto lg:flex lg:flex-wrap lg:columns-2 lg:justify-center lg:gap-6 xl:gap-x-10  lg:border-b-4 lg:border-b-old-gold">

    @foreach(TheHomeCards() as $card)
        <!-- Cards -->
    <a href="{{route($card->route)}}" class="block">
    <div class="xl:last:ml-0 w-4/5 lg:w-full mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem]  sm:max-w-[300px] lg:max-w-md">
        <div class="relative lg:h-56 xl:h-72">
            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-hidden">
                <img class="rounded-t-[12px] grayscale hover:grayscale-0 hover:scale-110 transition ease-in-out duration-300 overflow-hidden"  src="/storage/{{ $card->image }}" alt="{{ $card->title }}">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">{{__($card->title)}}</p>
            </div>
        </div>
        <div class="p-4 text-center text-old-black">
            <p class="hidden lg:inline text-sm lg:text-lg lg:leading-6 text-center">
                {{ $card->description }}
            </p>
        </div>
    </div>
    </a>
    @endforeach

</div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

