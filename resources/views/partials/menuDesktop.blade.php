<div class="hidden lg:block lg:w-11/12 xl:w-full lg:mx-auto">
    <div class="lg:w-11/12 xl:w-4/5 mx-auto mt-8">
        <ul class="flex justify-around items-center text-old-black ">
            @foreach (TheMenu() as $item)
                <li class="{{ (request()->routeIs($item->route) || request()->routeIs($item->route . '.*')) ? 'active-link' : ''}} lg:py-0 xl:py-1 lg:px-3"><a class="uppercase text-sm " href="{{ route($item->route)}}"> {{$item->name}} </a></li>
            @endforeach
            @if (auth()->user())  
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <input class="ml-3 uppercase text-sm" type="submit" value="Cerrar Session">
            </form>
            @endif
            <li class="flex">
                <a href="{{route('setlocale', ['locale'=>'es'])}}" class="flex items-center mr-1 {{ app()->getLocale() == 'es' ? 'opacity-100' : 'opacity-50' }}" >
                    <img class="mr-1 w-4 h-3" src="{{asset('./img/lang_es.png')}}" alt="">
                    <span>ES</span>
                </a>
                <span class="m-1 -mt-[1.6px]">|</span>
                <a href="{{route('setlocale', ['locale'=>'en'])}}" class="flex items-center {{ app()->getLocale() == 'en' ? 'opacity-100' : 'opacity-50' }}">
                    <img class="mx-1 w-4 h-3 opacity-100" src="{{asset('./img/lang_en.png')}}" alt="">
                    <span>EN</span>
                </a>
            </li>
        </ul>
    </div>
</div