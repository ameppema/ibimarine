<div class="hidden lg:block">
    <div class="w-4/5 mx-auto mt-8">
        <ul class="flex justify-between text-old-black font-bold">
            <li class="{{ request()->routeIs('home') ? 'active-link' : ''}} py-1 px-7"><a class="uppercase text-sm " href="/"> Inicio </a></li>
            <li class="{{ request()->routeIs('rent') ? 'active-link' : ''}} py-1 px-7"><a class="uppercase text-sm " href="{{ route('rent') }}"> Alquiler </a></li>
            <li class="{{ request()->routeIs('sale') ? 'active-link' : ''}} py-1 px-7"><a class="uppercase text-sm " href="{{ route('sale') }}"> Venta </a></li>
            <li class="{{ request()->routeIs('toys') ? 'active-link' : ''}} py-1 px-7"><a class="uppercase text-sm " href="{{ route('toys') }}"> Toys </a></li>
            <li class="{{ request()->routeIs('home') ? 'active-link' : ''}} py-1 px-7"><a class="uppercase text-sm " href="{{ route('home') }}"> Eventos </a></li>
            <li class="{{ request()->routeIs('home') ? 'active-link' : ''}} py-1 px-7"><a class="uppercase text-sm " href="{{ route('home') }}"> Noticias </a></li>
            <li class="{{ request()->routeIs('contact') ? 'active-link' : ''}} py-1 px-7"><a class="uppercase text-sm " href="{{ route('contact') }}"> Contacto </a></li>
            <li class="py-1 pr-4"><a class="uppercase text-sm " href="{{ route('admin') }}"> Area Privada </a></li>
            <li class="flex">
                <a href="#" class="flex items-center mr-1">
                    <img class="mr-1 w-4 h-3" src="/img/lang_es.png" alt="">
                    <span>ES</span>
                </a>
                <span class="mr-1">|</span>
                <a href="#" class="flex items-center">
                    <img class="mr-1 w-4 h-3" src="/img/lang_en.png" alt="">
                    <span>EN</span>
                </a>
            </li>
        </ul>
    </div>
</div>