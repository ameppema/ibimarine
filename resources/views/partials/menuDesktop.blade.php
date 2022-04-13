<div class="hidden lg:block lg:w-11/12 xl:w-full lg:mx-auto">
    <div class="lg:w-11/12 xl:w-4/5 mx-auto mt-8">
        <ul class="flex justify-around items-center text-old-black ">
            <li class="{{ request()->routeIs('home') ? 'active-link' : ''}} lg:py-0 xl:py-1 lg:px-3"><a class="uppercase text-sm " href="{{ route('home')}}"> Inicio </a></li>
            <li class="{{ request()->routeIs('rent') ? 'active-link' : ''}} lg:py-0 xl:py-1 lg:px-3"><a class="uppercase text-sm " href="{{ route('rent') }}"> Alquiler </a></li>
            <li class="{{ request()->routeIs('sale') ? 'active-link' : ''}} lg:py-0 xl:py-1 lg:px-3"><a class="uppercase text-sm " href="{{ route('sale') }}"> Venta </a></li>
            <li class="{{ request()->routeIs('toys') ? 'active-link' : ''}} lg:py-0 xl:py-1 lg:px-3"><a class="uppercase text-sm " href="{{route('toys')}}"> Toys </a></li>
            <li class="{{ request()->routeIs('events') ? 'active-link' : ''}} lg:py-0 xl:py-1 lg:px-3"><a class="uppercase text-sm " href="{{route('events')}}"> Eventos </a></li>
            <li class="{{ request()->routeIs('news') ? 'active-link' : ''}} lg:py-0 xl:py-1 lg:px-3"><a class="uppercase text-sm " href="{{route('news')}}"> Noticias </a></li>
            <li class="{{ request()->routeIs('contact') ? 'active-link' : ''}}lg:py-0 xl:py-1 lg:px-3"><a class="uppercase text-sm " href="{{route('contact')}}"> Contacto </a></li>
            <li class="{{ request()->routeIs('pivate.area') ? 'active-link' : ''}}lg:py-0 xl:py-1 lg:pr-3 xl:pr-7"><a class="uppercase text-sm " href="/"> Area Privada </a></li>
            <li class="flex">
                <a href="#" class="flex items-center mr-1">
                    <img class="mr-1 w-4 h-3" src="./img/lang_es.png" alt="">
                    <span>ES</span>
                </a>
                <span class="m-1">|</span>
                <a href="#" class="flex items-center opacity-50">
                    <img class="mx-1 w-4 h-3" src="./img/lang_en.png" alt="">
                    <span>EN</span>
                </a>
            </li>
        </ul>
    </div>
</div