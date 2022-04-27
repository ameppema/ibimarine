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
            <div class="w-4/5 mx-auto my-6 md:max-w-[340px] lg:max-w-full lg:w-full sm:max-w-[300px]">
                <!-- Card Head -->
                <div class="relative lg:h-56 xl:h-96">
    
                    <div class="rounded-t-lg max-h-[200px] xl:max-h-full overflow-y-hidden">
                        <img class="rounded-t-[12px] mx-auto"  src="{{asset('/img/news/news-01.jpeg')}}" alt="">
                    </div>
                </div>
                <!-- Card body -->
                <div class="p-4 lg:py-6 lg:px-32 text-center text-old-black lg:leading-4">
                    <div>
                        <p class="text-sm xl:text-xl">
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
    
            <div class="pb-10 mx-auto text-center">
                <a class="btn-gold" onclick="history.back()"  href="#">{{__('Back to News & Lifestyle')}}</a>
            </div>  
        </div>
@endsection

@section('footer')
        <!-- Section footer -->
        <footer class="text-old-black text-center mx-auto lg:flex lg:my-10 lg:w-4/5  lg:gap-4">
            <div class="lg:hidden">
                <p>Derechos Reservados</p>
            </div>
            <div>
                <p class="inline">Términos y condiciones</p> - <p class="inline">Política de Privacidad</p>
            </div>
            <div>
                <p class="inline">Política de cookies</p> - <p class="inline">Protección de datos</p>
            </div>
            <div class="lg:-order-1">
                <p> <b>IBIMARINE &copy;</b> </p>
            </div>
    
            <div class="ml-36 hidden lg:justify-self-end lg:flex">
                <p class="mr-5">Find us: </p>
                <a href="#" class="text-old-gold"><i class="fa-brands fa-facebook-square mr-3"></i></a>
                <a href="#" class="text-old-gold"><i class="fa-brands fa-instagram-square "></i></a>
            </div>
        </footer>
@endsection