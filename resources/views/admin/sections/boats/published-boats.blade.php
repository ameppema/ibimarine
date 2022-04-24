<div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">
    <p class="text-[#343a40] text-xl font-bold mb-2">Listado de embarcaciones publicadas</p>
    <div class="flex flex-wrap gap-x-12 gap-y-20 mt-5">

    @if ($boats)
      @foreach ($boats as $boat)
          
      <article class="flex flex-col items-center justify-center gap-y-2">
        <p class="text-sm">{{ $boat->name }}</p>
        <img src="/storage/{{ $boat->getCover() }}" alt="" class="w-28 h-24 object-cover">
        <div class="flex items-center justify-center gap-4 ">
          <a href="{{ route('admin.rent.edit', $boat) }}"><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></a>
          
          <form method="POST" action="{{route('admin.rent.destroy', $boat)}}">
            @csrf
            <button type="submit" class=""><i class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
          </form>
        </div>
      </article>
      
      @endforeach
    @endif

    </div>
  </div>