<div class="container navbar">
    <ul class="menu__desktop text-upper">
        <li class="menu__item {{ (request()->routeIs('home')) ? 'selected' : '' }}"><a href="{{route('home')}}">Inicio</a></li>
        <li class="menu__item {{ (request()->routeIs('rent')) ? 'selected' : '' }}"><a href="{{route('rent')}}">Alquiler</a></li>
        <li class="menu__item {{ (request()->routeIs('sale')) ? 'selected' : '' }}"><a href="{{route('sale')}}">Venta</a></li>
        <li class="menu__item {{ (request()->routeIs('toys')) ? 'selected' : '' }}"><a href="{{route('toys')}}">Toys</a></li>
        <li class="menu__item {{ (request()->routeIs('events')) ? 'selected' : '' }}"><a href="{{route('events')}}">Eventos</a></li>
        <li class="menu__item {{ (request()->routeIs('news')) ? 'selected' : '' }}"><a href="{{route('news')}}">Noticias</a></li>
        <li class="menu__item {{ (request()->routeIs('contact')) ? 'selected' : '' }}"><a href="{{route('contact')}}">Contacto</a></li>
        <li class="menu__item"><a href="#">Area Privada</a></li>
        <li class="menu__item_langs">
            <a href="#">
                <img class="img-fluid" src="./img/lang_es.png" alt="">
                <p>Es</p>
            </a> 
            <span class="bar">&#124;</span> 
            <a href="#">
                <img class="img-fluid" src="./img/lang_en.png" alt="">
                <p>En</p>
            </a>
        </li>
    </ul>
</div>