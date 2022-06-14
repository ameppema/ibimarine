<header class="container mt-8 lg:mt-10 md:mx-auto">

    <div class="relative h-20">
        <div class="absolute left-0 right-0 mx-auto w-56 lg:w-72">
            <a href="/">
                <img src="{{asset('img/home/home-logo_01.png')}}" alt="Logo Ibimarine">
            </a>
        </div>

        <div class="absolute right-0 top-0 mt-2 mr-5 lg:hidden" id="menu_open">
            <i class="text-3xl fa-solid fa-bars text-old-gold"></i>
        </div>
    </div>

    <div class="block text-center lg:mt-6">
        <div>
            <p class="font-bold text-old-black uppercase">{{__('Ibiza Oficial Agent')}}</p>
        </div>

        <div class="columns-3xs flex justify-center items-center gap-3 mt-1 mb-1 ">
            	<a href="#">
					<img class="w-14" src="/img/home/brand_aquila.png" alt="{{TheBrand()->slug}}" style="width: 150px;">
				</a>
                <a href="#">
                    <img class="w-14" src="/img/home/brand_sessamarine.png" alt="{{TheBrand()->slug}}" style="width: 150px;">
                </a>
        </div>
    </div>

</header>