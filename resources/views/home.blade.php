@extends('layout.template')  

@section('title', 'Home')

@section('hero')
    <!-- Section Hero - Title -->
    <section class="my-5">
        <div class="border-y-8 border-old-gold">
            <div class="h-48 overflow-hidden lg:h-[32rem]">
                <img class="w-full object-cover lg:object-center" style="height:100%;" src="/img/home/head_banner.jpg" alt="Hero Image">
            </div>
        </div>
    </section>
@endsection

@section('content')
    
<div class="container xl:w-4/5 lg:w-11/12 lg:mx-auto lg:flex lg:flex-wrap lg:columns-2 lg:justify-center lg:gap-6 xl:gap-x-10  lg:border-b-4 lg:border-b-old-gold">

    <!-- Cards -->
    <a href="{{route('rent')}}" class="block">
    <div class="xl:last:ml-0 w-4/5 lg:w-full mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem]  sm:max-w-[300px] lg:max-w-md">
        <div class="relative lg:h-56 xl:h-72">
            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-hidden">
                <img class="rounded-t-[12px] grayscale hover:grayscale-0 hover:scale-110 transition ease-in-out duration-300 overflow-hidden"  src="./img/home/home-04.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">{{__('Yacht Rental')}}</p>
            </div>
        </div>
        <div class="p-4 text-center text-old-black">
            <p class="hidden lg:inline text-sm lg:text-lg lg:leading-6 text-center">
                Cras venenatis porta ligula sed suscipit.
                Ut in vehicula ex. Vivamus fermentum nunc mi,
                ac condimentum magna porttitor faucibus.
                Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubila curae.
            </p>
        </div>
    </div>
    </a>
    <!-- Cards -->
    <a href="{{route('sale')}}" class="block">
    <div class="xl:last:ml-0 w-4/5 lg:w-full mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem]  sm:max-w-[300px] lg:max-w-md">
        <div class="relative lg:h-56 xl:h-72">
            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-hidden">
                <img class="rounded-t-[12px] grayscale hover:grayscale-0 hover:scale-110 transition ease-in-out duration-300 overflow-hidden"  src="./img/home/home-05.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">{{__('Sale Of Yachts')}}</p>
            </div>
        </div>
        <div class="p-4 text-center text-old-black">
            <p class="hidden lg:inline text-sm lg:text-lg lg:leading-6 text-center">
                Nulla at lectus at odio vulputate pellentesque
				in sed ipsum. Phasellus ut ligula ac sapien sodales
				tincidunt. Cras diam felis, hendrerit sit amet quam vel,
				scelerisque dapibus libero, donec at lacus rhoncus,
				dignissim urna at.
            </p>
        </div>
    </div>
    </a>
    <!-- Cards -->
    <a href="{{route('toys')}}" class="block">
    <div class="xl:last:ml-0 w-4/5 lg:w-full mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem]  sm:max-w-[300px] lg:max-w-md">
        <div class="relative lg:h-56 xl:h-72">
            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-hidden">
                <img class="rounded-t-[12px] grayscale hover:grayscale-0 hover:scale-110 transition ease-in-out duration-300 overflow-hidden"  src="./img/home/home-03.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">Toys</p>
            </div>
        </div>
        <div class="p-4 text-center text-old-black">
            <p class="hidden lg:inline text-sm lg:text-lg lg:leading-6 text-center">
                Proin at laoreet nulla, quis facilisis sem. Donec ut sodales
				turpis, a ultricies orci. Aliquam lacinia sem urna,
				eget mattis dui iaculis vel. Fusce feugiat neque arcu,
				non elementum odio vehicula ac.
            </p>
        </div>
    </div>
    </a>
    <!-- Cards -->
    <a href="{{route('events')}}" class="block">
    <div class="xl:last:ml-0 w-4/5 lg:w-full mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem]  sm:max-w-[300px] lg:max-w-md">
        <div class="relative lg:h-56 xl:h-72">
            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-hidden">
                <img class="rounded-t-[12px] w-[120%] grayscale hover:grayscale-0 hover:scale-110 transition ease-in-out duration-300 overflow-hidden"  src="./img/home/home-01.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">{{__('Events')}}</p>
            </div>
        </div>
        <div class="p-4 text-center text-old-black">
            <p class="hidden lg:inline text-sm lg:text-lg lg:leading-6 text-center">
                Cras venenatis porta ligula sed suscipit.
                Ut in vehicula ex. Vivamus fermentum nunc mi,
                ac condimentum magna porttitor faucibus.
                Vestibulum ante ipsum primis in faucibus
                orci luctus et ultrices posuere cubila curae.
            </p>
        </div>
    </div>
    </a>
    <!-- Cards -->
    <a href="{{route('news')}}" class="block">
    <div class="xl:last:ml-0 w-4/5 lg:w-full mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem]  sm:max-w-[300px] lg:max-w-md">
        <div class="relative lg:h-56 xl:h-72">
            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-hidden">
                <img class="rounded-t-[12px] grayscale hover:grayscale-0 hover:scale-110 transition ease-in-out duration-300 overflow-hidden"  src="./img/home/home-02.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">{{__('News & Lifestyle')}}</p>
            </div>
        </div>
        <div class="p-4 text-center text-old-black">
            <p class="hidden lg:inline text-sm lg:text-lg lg:leading-6 text-center">
                Nulla at lectus at odio vulputate pellentesque
				in sed ipsum. Phasellus ut ligula ac sapien sodales
				tincidunt. Cras diam felis, hendrerit sit amet quam vel,
				scelerisque dapibus libero, donec at lacus rhoncus,
				dignissim urna at.
            </p>
        </div>
    </div>
    </a>
    <!-- Cards -->
    <a href="{{route('contact')}}" class="block">
    <div class="xl:last:ml-0 w-4/5 lg:w-full mx-auto my-6 md:max-w-[340px] xl:max-w-[30rem]  sm:max-w-[300px] lg:max-w-md">
        <div class="relative lg:h-56 xl:h-72">
            <div class="rounded-t-lg max-h-[200px] xl:max-h-64 overflow-hidden">
                <img class="rounded-t-[12px] grayscale hover:grayscale-0 hover:scale-110 transition ease-in-out duration-300 overflow-hidden"  src="./img/home/contact.jpg" alt="">
            </div>
            <div class="absolute bottom-0 h-8 xl:h-12 bg-old-gold w-full text-center">
                <p class="text-white leading-8 xl:leading-[3rem] text-lg xl:text-2xl uppercase">{{__('Contact')}}</p>
            </div>
        </div>
        <div class="p-4 text-center text-old-black">
            <p class="hidden lg:inline text-sm lg:text-lg lg:leading-6 text-center">
                Proin at laoreet nulla, quis facilisis sem. Donec ut sodales
				turpis, a ultricies orci. Aliquam lacinia sem urna,
				eget mattis dui iaculis vel. Fusce feugiat neque arcu,
				non elementum odio vehicula ac.
            </p>
        </div>
    </div>
    </a>

</div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

