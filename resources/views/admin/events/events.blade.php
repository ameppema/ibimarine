@extends('admin.layouts.template')

@section('title', 'Events')

@section('content')
    
@include('partials.alert')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
      <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página de Eventos</h2>
      <div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">
        <p class="text-[#343a40] text-xl font-bold mb-4">Listado de Eventos</p>
        <div class="grid grid-cols-3 gap-4 mt-5">
          @foreach ($events as $event)              
          <article class="flex border border-[#343a40] p-2 gap-2 rounded-lg">
            <img src="/storage/{{$event->image}}" alt="Ibimarine Events" class="w-28 object-cover">
            <div class="flex flex-col gap-2 justify-center">
              <p class="text-sm line-clamp-6">{{$event->description}}</p>
              <div class="flex items-center justify-center gap-4 ">
                <a href="{{route('admin.events.edit', $event)}}">
                    <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                </a>
                <form method="POST" action="{{route('admin.events.delete', $event)}}"> @csrf @method('DELETE')
                  <button><i
                      class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                </form>
              </div>
            </div>
          </article>
          @endforeach

        </div>
      </div>
      <div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">
        <p class="text-[#343a40] text-xl font-bold mb-4">Nueva Evento</p>
        <form action="{{route('admin.events.store')}}" method="POST" enctype="multipart/form-data"> @csrf
          <input type="file" name="image" id="image" hidden>
          <div class="flex mt-10 justify-between">
            <div class="w-3/12 ">
              <div class="flex items-center mb-3">
                <span class="text-[#343a40] font-bold mx-5">Imagen</span>
              </div>
              <div class="w-full border h-[9.7rem] relative cursor-pointer" onclick="document.getElementById('image').click()">
                <i class="text-old-black fa-solid fa-upload absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-xl"></i>
              </div>
            </div>
            <div class="w-4/12 ">
              <div class="flex items-center mb-3">
                <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                <span class="text-[#343a40] font-bold mx-5">Texto del Evento</span>
              </div>
              <textarea name="description" id="description" rows="4" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Texto del Evento"></textarea>
            </div>
            <div class="w-4/12 ">
              <div class="flex items-center mb-3">
                <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                <span class="text-[#343a40] font-bold mx-5">Event Text</span>
              </div>
              <textarea name="description_en" id="description_en" rows="4" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Event Text"></textarea>
            </div>

          </div>
          <div class="flex justify-center mb-6 mt-10">
            <button
              class="bg-[#037bff] border border-transparent text-white py-1 px-20 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
              Agregar Evento
            </button>
          </div>
        </form>
      </div>
    </section>
    {{-- End Content --}}

@endsection

@section('js')
    
@endsection
