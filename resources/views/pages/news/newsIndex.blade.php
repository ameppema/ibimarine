@extends('layout.template')

@section('title', 'Noticias y Life Style')

@section('hero')
    <!-- Section Hero - Title -->
    <section class="my-5">
        <div class="lg:mt-16 mt-4 border-y-4 border-old-gold py-1  lg:px-16 lg:mx-auto lg:w-max">
           <p class="text-center text-old-black text-2xl uppercase font-bold">{{__('News & Lifestyle')}}</p>
        </div>
    </section>
@endsection

@section('content')
    <!-- Section Content -->

    <div class="container lg:mx-auto lg:flex lg:flex-wrap lg:columns-2 lg:justify-center lg:w-4/5 lg:border-b-4 lg:border-b-old-gold">

        <!-- Cards -->
        @foreach ($news as $new)            
        <div class="w-11/12 h-44 lg:h-80 my-6 mx-auto flex columns-2 even:flex-row-reverse overflow-y-hidden rounded-l-xl even:rounded-l-none even:rounded-r-xl">
            <!-- Card Left Side -->
            <div class="w-1/2 lg:w-3/5">
                <div>
                    <img class="object-cover h-44 lg:h-80 w-full" src="/storage/{{$new->image}}" alt="Ibimarine News">
                </div>
            </div>

            <!-- Card Right side -->
            <div class="w-1/2 lg:w-2/5 h-44 lg:h-auto p-4 text-center border-2 border-old-gold">
                <div class="line-clamp-5 lg:line-clamp-8 text-md lg:text-xl leading-5 lg:align-middle">
                    {{$new->description}}
                </div>
                <div class="mt-4 ">
                    <a class="btn-gold" href="{{route('news.show', $new)}}">{{__('Read more')}}</a>
                </div>
            </div>
        </div>
        @endforeach
   
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection