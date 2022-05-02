<div id="menu_mobile" class="hidden fixed top-0 left-0 z-10  bg-old-black h-screen w-full">

    <header class="container mt-8">

        <div class="relative h-20">
            <div class="absolute left-0 right-0 mx-auto w-56">
                <a href="{{route('home')}}">
                    <img src="{{asset('/img/logoibimarine_2.png')}}" alt="Logo ibimarine">
                </a>
            </div>
    
            <div id="menu_close" class="absolute right-0 top-0 -mt-1 mr-5">
                <span class="text-5xl text-old-gold">&times;</span>
            </div>
        </div>

    </header>

    <section>
        <div class="border-y-2 border-old-gold w-4/5 lg:w-96 lg:h-56 mx-auto flex justify-center gap-4 columns-2 text-white py-2">
            <a href="{{route('setlocale', ['locale'=>'es'])}}">
                <div class="w-16 flex items-center {{ app()->getLocale() == 'es' ? 'opacity-100' : 'opacity-50'}}">
                    <div>
                        <img src="{{asset('img/lang_es.png')}}" alt=""> 
                    </div>
                    <div >
                        <span class="text-2xl font-bold ml-2">ES</span>
                    </div>
                </div> 
            </a>
            <span class="place-self-center text-lg">&#124;</span>
            <a href="{{route('setlocale', ['locale'=>'en'])}}">
                <div class="w-16 flex items-center {{ app()->getLocale() == 'en' ? 'opacity-100' : 'opacity-50'}}">
                    <div>
                        <img src="{{asset('img/lang_en.png')}}" alt=""> 
                    </div>
                    <div>
                        <span class="text-2xl font-bold ml-2">EN</span>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <section>
        @foreach (TheMenu() as $item)
            @if ($loop->last)
                @break
            @endif
            <a href="{{ route($item->route)}}"><p class="text-2xl text-white font-bold my-6 text-center uppercase">{{$item->name}}</p></a>
            @endforeach
            @if (auth()->user())
                <form method="POST" action="{{route('logout')}}" class="text-center">
                    @csrf
                    <input type="submit" value="Cerrar session" class="text-2xl text-white font-bold my-6 text-center uppercase">
                </form>
            @endif
    </section>

    <section class="mb-4">
        <div class="border-y-2 border-old-gold w-4/5 mx-auto flex justify-center gap-4 columns-2 text-white py-2">
            <div>
                <p class="font-bold text-2xl"> <a href="{{ route(TheMenu()->last()->route) }}">{{TheMenu()->last()->name}}</a> </p>
            </div>
        </div>
    </section>


</div>