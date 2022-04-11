<div id="menu_mobile" class="hidden fixed top-0 left-0 z-10  bg-old-black h-screen w-full">

    <header class="container mt-8">

        <div class="relative h-20">
            <div class="absolute left-0 right-0 mx-auto w-56">
                <img src="/img/logoibimarine_2.png" alt="Logo ibimarine">
            </div>
    
            <div id="menu_close" class="absolute right-0 top-0 -mt-1 mr-5">
                <span class="text-5xl text-old-gold">&times;</span>
            </div>
        </div>

    </header>

    <section>
        <div class="border-y-2 border-old-gold w-4/5 lg:w-96 lg:h-56 mx-auto flex justify-center gap-4 columns-2 text-white py-2">
            <div class="w-16 flex items-center hover:opacity-100">
                <div>
                    <img src="/img/lang_es.png" alt=""> 
                </div>
                <div >
                    <span class="text-2xl font-bold ml-2">ES</span>
                </div>
            </div> 
            <span class="place-self-center text-lg">&#124;</span>
            <div class="w-16 flex items-center opacity-50 hover:opacity-100">
                <div>
                    <img src="/img/lang_en.png" alt=""> 
                </div>
                <div>
                    <span class="text-2xl font-bold ml-2">EN</span>
                </div>
            </div>
        </div>
    </section>

    <section>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active-link' : ''}}"><p class="text-2xl text-white font-bold my-6 text-center uppercase">Home</p></a>
        <a href="{{ route('rent') }}" class="{{ request()->routeIs('rent') ? 'active-link' : ''}}"><p class="text-2xl text-white font-bold my-6 text-center uppercase">Alquiler</p></a>
        <a href="{{ route('sale') }}" class="{{ request()->routeIs('sale') ? 'active-link' : ''}}"><p class="text-2xl text-white font-bold my-6 text-center uppercase">Venta</p></a>
        <a href="{{ route('toys') }}" class="{{ request()->routeIs('toys') ? 'active-link' : ''}}"><p class="text-2xl text-white font-bold my-6 text-center uppercase">Complementos</p></a>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active-link' : ''}}"><p class="text-2xl text-white font-bold my-6 text-center uppercase">Eventos</p></a>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active-link' : ''}}"><p class="text-2xl text-white font-bold my-6 text-center uppercase">Noticias</p></a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active-link' : ''}}"><p class="text-2xl text-white font-bold my-6 text-center uppercase">Contacto</p></a>
    </section>

    <section>
        <div class="border-y-2 border-old-gold w-4/5 mx-auto flex justify-center gap-4 columns-2 text-white py-2">
            <div>
                <p class="font-bold text-2xl"> <a href="{{ route('admin') }}">Área Privada</a> </p>
            </div>
        </div>
    </section>


</div>