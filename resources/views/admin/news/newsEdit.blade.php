@extends('admin.layouts.template')

@section('title', 'Editar Noticia')

@section('content')
    
@include('admin.partials.errors')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
      <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página de Noticias</h2>

      <div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">
        <p class="text-[#343a40] text-xl font-bold mb-4">Nueva Noticia</p>
        <form action="{{route('admin.news.update', $news)}}" method="POST" enctype="multipart/form-data"> @csrf @method('PUT')
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
                placeholder="Texto del Evento">{{$news->description}}</textarea>
            </div>
            <div class="w-4/12 ">
              <div class="flex items-center mb-3">
                <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                <span class="text-[#343a40] font-bold mx-5">Event Text</span>
              </div>
              <textarea name="description_en" id="description_en" rows="4" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Event Text">{{$news->description_en}}</textarea>
            </div>

          </div>
          <div class="flex justify-center mb-6 mt-10">
            <button
              class="bg-[#037bff] border border-transparent text-white py-1 px-20 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
              Actualizar Noticia
            </button>
          </div>
        </form>
      </div>
    </section>
    {{-- End Content --}}

@endsection

@section('js')
    
@endsection
