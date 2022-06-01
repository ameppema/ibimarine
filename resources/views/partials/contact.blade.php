    <div class="{{ request()->is('admin/*') ? 'hidden' : ''}} text-center lg:hidden">
        <div class="m-0">
            <p class="text-old-gold text-xl font-bold">¡Contacta con nosotros!</p>
        </div>
        <div>
            <div class="flex items-center justify-center">
                <img class="w-8 mr-1 h-[22px] " src="/img/lang_es.png" alt="">
                <p class="text-3xl font-bold text-old-black">{{TheContactNumbers()->phone_es}}</p>
            </div>
            
            <div class="flex items-center justify-center">
                <img class="w-8 mr-1 h-[22px] " src="/img/lang_en.png" alt="">
                <p class="text-3xl font-bold text-old-black">{{TheContactNumbers()->phone_en}}</p>
            </div>
        </div>
        <div class="text-old-gold text-3xl my-1">
            <a href="#"><i class="fa-brands fa-facebook-square mr-3"></i></a>
            <a href="#"><i class="fa-brands fa-instagram-square "></i></a>
        </div>
    </div>