<!--Mobile Menu -->
<div class="menu__overlay" id="menu_mobile">
    <!-- Menu Content -->
    <div class="menu__content">
        <div class="menu__head">
            <a href="javascript:void(0)" id="close_navbar" class="invisible">&times;</a>
            
            <div class="head__logo-menu">
                <img class="img-fluid" src="./img/logoibimarine_2.png" alt="Logo Ibimarine">
            </div>
            
            <a href="javascript:void(0)" id="menu_close">&times;</a>
        </div>

        <div class="menu__section margin-top-2">
            <div class="menu__langs">
                <div class="lang active"><img class="img-fluid lang_img" src="./img/lang_es.png" alt=""> ES</div> 
                <span class="bar">&#124;</span>
                <div class="lang"><img class="img-fluid lang_img" src="./img/lang_en.png" alt="">EN</div>
            </div>
        </div>

        <div class="menu__links">
            <div class="menu__link margin-vertical-2"><a class="text-upper text-bold" href="{{ route('home') }}">Home</a></div>
            <div class="menu__link margin-vertical-2"><a class="text-upper text-bold" href="{{ route('rent') }}">Alquiler</a></div>
            <div class="menu__link margin-vertical-2"><a class="text-upper text-bold" href="{{ route('sale') }}">Venta</a></div>
            <div class="menu__link margin-vertical-2"><a class="text-upper text-bold" href="{{ route('toys') }}">Complementos</a></div>
            <div class="menu__link margin-vertical-2"><a class="text-upper text-bold" href="{{ route('events') }}">Eventos</a></div>
            <div class="menu__link margin-vertical-2"><a class="text-upper text-bold" href="{{ route('news') }}">Noticias</a></div>
            <div class="menu__link margin-vertical-2"><a class="text-upper text-bold" href="{{ route('contact') }}">Contacto</a></div>
        </div>
            <div class="menu__link"><a class="text-upper text-bold" href="#">Área Privada</a></div>
        </div>
    </div>
</div>