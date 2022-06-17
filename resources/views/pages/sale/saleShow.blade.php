@extends('layout.template')

@section('title', 'Sale Show')

@section('pre-css')
<link rel="stylesheet" href="/vendor/swiper/swiper-bundle.min.css"/>

@endsection

@section('hero')
<section class="mt-5">
    <div class="lg:mt-16 mt-4 border-y-4 border-old-gold py-1  lg:px-16 lg:mx-auto lg:w-max">
       <p class="lg:hidden text-center text-old-black text-2xl uppercase font-bold">{{__('Sale Of Yachts')}}</p>
       <p class="hidden lg:block text-center text-old-black text-2xl uppercase font-bold">{{ $boat->name }}</p>
    </div>
</section>
@endsection

@section('content')

{{-- OVERLAYS --}}
    <!-- Request - overlay -->

@if(session()->has('success'))
    <div id="request_overlay" class="fixed top-0 left-0 z-10  bg-old-black/95  h-screen w-full">

        <!-- Overlay content -->
        <div class="h-screen flex flex-col items-center text-center">
            <div>
                <div class="w-56 mt-40 mx-auto">
                    <img src="/img/logoibimarine_2.png" alt="Logo Ibimarine">
                </div>
            </div>

            <div class="text-white text-center">
                <div class="w-4/5 mx-auto my-10">
                    <p class="font-bold text-2xl lg:text-3xl my-5 lg:my-8">¡Gracias por su Petición!</p>
                    <p class="text-xl lg:text-3xl lg:w-[50%] mx-auto">En menos de 12 horas,
                        nuestros comerciales
                        contactaran con Usted
                        para finalizar la reserva
                    </p>
                </div>

            </div>

            <div>
                <button id="request_close" class="btn-gold">Cerrar</button>
            </div>
        </div>

    </div>
@endif

@include('partials.errorAlert')
    <!-- Photos - overlay -->
    <div id="photos_overlay" class="hidden fixed top-0 left-0 z-10  bg-old-black/95  h-screen w-full">

        <!-- Overlay content -->
        <div class="h-screen flex flex-col items-center text-center">
            <div>
                <div class="xl:w-3/5 md:w-4/5 mx-auto mt-32 lg:mt-16">
                    <div class="h-56 lg:h-[420px] overflow-y-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img id="photo_overlay_image" src="/storage/{{$boat->getGallery()[0]->image_src ?? ''}}" alt="Hero Slider Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-white text-center">
                <div class="xl:mx-auto p-5 grid grid-cols-3 lg:grid-cols-6 gap-2">
                    @foreach ($boat->getGallery() as $image)
                    <div>
                        <img class="photo_overlay_thumbnail w-28 h-20 object-cover" src="/storage/{{$image->image_src}}" alt="{{$image->image_alt}}">
                    </div>
                    @endforeach
                </div>
            </div>

            <div>
                <button id="photos_close" class="btn-gold">Cerrar</button>
            </div>
        </div>

    </div>

    <div class="container" style="margin: 0 auto;">

        <!-- Section Slides -->
        <div>

            <!-- Slider Hero Image -->
            <div id="photos_open" class="xl:w-4/5 mx-auto">
                <div class="swiper main_img h-56 xl:h-96 overflow-y-hidden xl:rounded-t-xl">
                    <div class="swiper-wrapper">

                        @foreach ($boat->getGallery() as $image)
                        <div class="swiper-slide">
                            <img class="md:w-full lg:w-[100%] md:h-96 object-cover" src="/storage/{{$image->image_src}}" alt="{{$image->image_alt ?? '' }}">
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- Slider thumbnails Carousel -->
            <div class="md:w-[70%] flex mx-auto justify-center items-center my-2">
                <div class="arrow w-1/12 h-6 xl:h-12" id="arrowPrev">
                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com" viewBox="43.026 0 161.967 490" width="161.967" height="490">
                        <polyline style="stroke: rgb(60, 64, 69); fill: rgb(60, 64, 69);" points="204.993 0.285 204.993 490 43.026 244.36 204.72 0" bx:origin="0.525 0.496"/>
                    </svg>
                </div>
                <div class="swiper thumbnails-row mx-auto w-10/12" thumbsSlider="">
                    <div class="swiper-wrapper flex">

                        @foreach ($boat->getGallery() as $image)  
                        <div class="swiper-slide max-h-14 lg:max-h-[4.5rem] xl:max-h-[100px] overflow-y-hidden">
                            <img class="md:w-44 md:h-28 object-cover" src="/storage/{{ $image->image_src }}" alt="{{ $image->image_alt }}">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="arrow w-1/12 h-6 xl:h-12" id="arrowNext">
                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com" viewBox="51.124 -3.92 161.967 490" width="161.967" height="490">
                        <polyline style="stroke: rgb(60, 64, 69); fill: rgb(60, 64, 69);" points="204.993 0.285 204.993 490 43.026 244.36 204.72 0" transform="matrix(-1, 0, 0, -1, 256.117344, 486.079994)" bx:origin="0.525 0.496"/>
                      </svg>
                </div>
            </div>
        </div>

        <!-- Section Boat Title on Mobile -->

        <div class="lg:hidden">
            <div class="bg-old-gold text-center w-11/12 mx-auto py-1 mt-6">
                <h1 class="text-white text-xl font-bold">Sessa Marine c44</h1>
            </div>
        </div>

        <!-- Section Boat Features -->
        <div class="">

            <!-- yacht feauture icons -->
            <div class="flex justify-evenly xl:justify-center xl:gap-4 px-6 my-3 opacity-50">

                @foreach ($boat->additions as $additon)
                <div class="w-7 lg:w-12 flex flex-col justify-center items-center text-center">
                    <img class="" src="{{$additon->icon}}" alt="feature icon">
                    <span class="yacht__icon-caption text-xs">{{($additon->name == 'crew' ? $boat->features->pax : $additon->name)}}</span>
                </div>
                @endforeach

            </div>
            
            <!-- yacht description -->
            <div class="md:my-12 mx-auto xl:text-xl xl:w-1/2 px-6 text-center text-old-black">
                <p> 
                    {{$boat->description}}
                </p>
            </div>

            <!-- yacht feature table -->
            <div class="mx-auto xl:w-1/2 px-6 ">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <table class="min-w-full">
                        <tbody table class="min-w-full">

                            @foreach ($boat->getFeatures()->getAttributes() as $key => $value)
                            <tr class="even:bg-gray-1 flex justify-between w-full px-3">
                                <td class="xl:text-xl text-sm text-old-black font-light capitalize">
                                    {{__(feature_display_name($key))}}
                                </td>
                                <td class="xl:text-xl text-sm text-old-black font-light">
                                    {{$value ?? '-'}}
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <!-- Reservation calendar -->
        <div class="lg:grid  lg:justify-center lg:items-center">


            <!-- Form -->
            <div class="lg:w-80 w-4/5 mx-auto">
                <form id="request_reservation_form" method="POST" action="{{ route('reservation.sale.mail') }}" class="font-bold text-old-black">
                    @csrf
                    <input type="hidden" name="boat_id" value="{{$boat->id}}">
                    <input type="hidden" name="boat_name" value="{{$boat->name}}">
                    <div class="mb-4">
                        <label class="block" for="name">{{__('Name')}}</label>
                        <input class="w-full" type="text" name="name" id="" required>
                    </div>
                    <div class="mb-4">
                        <label class="block" for="email">{{__('Email')}}</label>
                        <input class="w-full" type="text" name="email" id="" required>
                    </div>
                    <div class="mb-4">
                        <label class="block" for="phone">{{__('Phone')}}</label>
                        <input class="w-full" type="text" name="phone" id="" required>
                    </div>

                    <div class="mb-4">
                        <input type="checkbox" name="consent" id="consent" required aria-required="required">
                        <label for="consent">{{ __('I agree to the') }} <a style="text-decoration: underline;" href="{{ route('legal.privacy') }}">{{ __('Privacy Policy') }}</a></label>
                    </div>

                    <div class="text-center">
                        <input id="request_open" class="btn-gold" type="submit" value="{{__('Send Request')}}">
                    </div>
                </form>
            </div>

        </div>



    </div>

        @if ($boat->similarBoats->count())
        <!-- Section similar boats -->
        <section class="lg:w-4/5 lg:mx-auto mt-5">
            <div class="w-2xl border-y-4 border-old-gold py-2  lg:px-16 lg:mx-auto">
                <div>
                    <p class=" text-center text-old-black text-2xl uppercase font-bold">{{__('Similar Boats')}}</p>
                </div>            <!-- Slider thumbnails Carousel -->
                <div class="flex mx-auto justify-center items-center my-2">
                    <div class="lg:-mt-8 arrow w-1/12 h-6 xl:h-12" id="arrowPrev">
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com" viewBox="43.026 0 161.967 490" width="161.967" height="490">
                            <polyline style="stroke: rgb(60, 64, 69); fill: rgb(60, 64, 69);" points="204.993 0.285 204.993 490 43.026 244.36 204.72 0" bx:origin="0.525 0.496"/>
                        </svg>
                    </div>
                    <div class="swiper swiper-similar-boats mx-auto w-10/12" thumbsSlider="">
                        <div class="swiper-wrapper flex">
    
                            @foreach ($boat->similarBoats as $similar_boat)
                            <a href="{{route('sale.show', ['boat_slug'=>$similar_boat->boat->slug])}}"  class="swiper-slide max-h-14 xl:max-h-48 overflow-y-hidden">
                            <div>
                                <div class="md:h-[100px] overflow-y-hidden">
                                    <img class="object-cover" src="/storage/{{$similar_boat->boat->getCover()}}" alt="thumbnail">
                                </div>
                                <p class="text-center uppercase mt-2">{{$similar_boat->boat->name}}</p>
                            </div>
                            </a>
                            @endforeach

                        </div>
                    </div>
                    <div class="lg:-mt-8 arrow w-1/12 h-6 xl:h-12" id="arrowNext">
                        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com" viewBox="51.124 -3.92 161.967 490" width="161.967" height="490">
                            <polyline style="stroke: rgb(60, 64, 69); fill: rgb(60, 64, 69);" points="204.993 0.285 204.993 490 43.026 244.36 204.72 0" transform="matrix(-1, 0, 0, -1, 256.117344, 486.079994)" bx:origin="0.525 0.496"/>
                          </svg>
                    </div>
                </div>
            </div>
        </section>
        @else
        <div class="lg:w-4/5 lg:mx-auto mt-5 w-2xl border-b-4 border-b-old-gold py-2  lg:px-16 lg:mx-auto"></div>
        @endif

@endsection

@section('footer')
    @include('partials.footerShow')
@endsection

@section('js')

    <!-- Menu Script -->
    <script src="/vendor/swiper/swiper-bundle.min.js"></script>

    <script>

       // Main Slide
       const slideMainThumbs = new Swiper('.thumbnails-row', {
            slidesPerView: 3,
            spaceBetween: 5,
            breakpoints : {
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10
                    }
            }
        })

        const slideMain = new Swiper('.main_img', {
            spaceBetween: 10,
            navigation: {
                nextEl: '#arrowNext',
                prevEl: '#arrowPrev'
            },
            thumbs: {
                    swiper: slideMainThumbs,
                    },
        })

        // Similar boats slide

        const slideSimilarBoats = new Swiper('.swiper-similar-boats' , {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlidesBounds: true,
            breakpoints : {
                640: {
                    slidesPerView: 4,
                    spaceBetween: 10
                    },
        }})

    </script>

    <!-- Overlays -->
    <script>
        // Request Overlay 

        const closeOverlayRequest = document.getElementById('request_close');
        const openRequestBtn = document.getElementById('request_open');
        const requestOverlay = document.getElementById('request_overlay');

        if(requestOverlay) closeOverlayRequest.addEventListener('click', closeRequest);
        
        // openRequestBtn.addEventListener('click', openRequest)

        function closeRequest(e){
            requestOverlay.style.display = 'none';
        }
        
        function openRequest(e){
            requestOverlay.style.display = 'block';
        }

        // Photos Overlay 

        const closePhotosBtn = document.getElementById('photos_close');
        const openPhotostBtn = document.getElementById('photos_open');
        const photostOverlay = document.getElementById('photos_overlay');

        closePhotosBtn.addEventListener('click', closePhotos);
        openPhotostBtn.addEventListener('click', openPhotos)


        const photoOverlayImage = document.getElementById('photo_overlay_image');
        // const photoOverlayThumbnail = document.getElementsByClassName('photo_overlay_thumbnail');

        photostOverlay.addEventListener('click', function(e){
            if(e.target.classList.contains('photo_overlay_thumbnail')){
                photoOverlayImage.src = e.target.src;
            }
        })
        function closePhotos(e){
            e.preventDefault()
            document.body.style.overflow = 'scroll';
            photostOverlay.style.display = 'none';
            photostOverlay.style.overflowY = 'hidden';
        }
        
        function openPhotos(e){
            e.preventDefault()
            photoOverlayImage.src = e.target.src;
            document.body.style.overflow = 'hidden';
            photostOverlay.style.display = 'block';
            photostOverlay.style.overflowY = 'scroll';
        }

    </script>

@endsection