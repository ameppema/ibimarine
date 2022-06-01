    <div class="{{ (request()->is('calendar') || request()->is('reservation'))  ? 'lg:hidden' : ''}} w-full my-10 hidden lg:block">
        <div class="flex justify-center items-center flex-col">
            <div>
                <p class="text-old-gold font-bold text-xl">
                    ¡{{__('Contact us')}}!
                </p>
            </div>

            <div class="flex">
                <div class="flex items-center">
                    <img class="w-8 mr-1 h-[22px] " src="/img/lang_es.png" alt="">
                    <p class="font-bold text-xl text-old-black">{{TheContactNumbers()->phone_es}}</p>
                </div>
                <div class="text-old-black mx-3 font-bold" style="font-size: x-large;">&#124;</div>
                <div class="flex items-center">
                    <img class="w-8 mr-1 h-[22px] " src="/img/lang_en.png" alt="">
                    <p class="font-bold text-xl text-old-black">{{TheContactNumbers()->phone_en}}</p>
                </div>
            </div>

        </div>
    </div>