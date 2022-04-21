@if (session()->has('success'))
<!-- Overlay Reservation -->
    
<div id="reservation_overlay" class="fixed top-0 left-0 z-10  bg-old-black/95  h-screen w-full">

    <!-- Overlay content -->
    <div class="h-screen flex flex-col items-center text-center">
        <div>
            <div class="w-56 mt-40 mx-auto">
                <img src="{{asset('/img/logoibimarine_2.png')}}" alt="Logo Ibimarine">
            </div>
        </div>

        <div class="text-white text-center">
            <div class="w-4/5 mx-auto my-10">
                <p class="font-bold text-2xl lg:text-3xl my-5 lg:my-8">{{session()->get('success')}}</p>
                <p class="text-xl lg:text-3xl lg:w-[50%] mx-auto">
                    {{session()->get('message')}}
                </p>
            </div>

        </div>

        <div>
            <button id="reservation_close" class="btn-gold">Cerrar</button>
        </div>
    </div>

</div>

@endif