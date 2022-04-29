@extends('admin.layouts.template')

@section('title', 'Edit Toy')

@section('content')
    
@include('admin.partials.errors')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página de Toys</h2>
        <div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">
          <p class="text-[#343a40] text-xl font-bold mb-4">Editar Toy</p>
          <form method="POST" action="{{route('admin.toys.update',  $toy)}}" enctype="multipart/form-data"> @csrf @method('PUT')
            <div class="border-[#3c4045] border flex items-center gap-4  bg-white mt-8 px-5 py-5  mb-5">
              <div class="flex items-center w-1/2">
                <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                <span class="text-[#343a40] font-bold mx-3">Título</span>
                <input type="text"
                  name="title"
                  value="{{old('title') ?? $toy->title}}"
                  class="border-[#343a40] text-gray-700 w-full appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none ">
              </div>
              <div class="flex items-center w-1/2">
                <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                <span class="text-[#343a40] font-bold mx-3">Title</span>
                <input type="text"
                  name="title_en"
                  value="{{old('title_en') ?? $toy->title_en}}"
                  class="border-[#343a40] text-gray-700 w-full appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none ">
              </div>
              <div>
                  <input type="file" name="image" id="image" hidden>
                  <button class="w-1/3 btn-off" type="button" onclick="document.getElementById('image').click()"><i class="fa-solid fa-upload mr-1"></i>Nueva imagen</button>
              </div>
            </div>
            <div class="flex mt-10 gap-x-8">
              <div class="w-full ">
                <div class="flex items-center mb-3">
                  <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                  <span class="text-[#343a40] font-bold mx-5">Descripción del toy</span>
                </div>
                <textarea name="description" id="" rows="8" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"placeholder="Descripción y texto del Toy">{{old('description') ?? $toy->description}}</textarea>
              </div>
              <div class="w-full ">
                <div class="flex items-center mb-3">
                  <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                  <span class="text-[#343a40] font-bold mx-5">Toy description</span>
                </div>
                <textarea name="description_en" id="" rows="8" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                  placeholder="Descripción y texto del toy">{{old('description_en') ?? $toy->description_en}}</textarea>
              </div>
            </div>
            <div class="flex justify-center mb-6 mt-10">
              <button
                class="bg-[#037bff] border border-transparent text-white py-1 px-10 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
                Agregar Toy
              </button>
            </div>
          </form>
        </div>
      </section>
    {{-- End Content --}}

@endsection

@section('js')
    
@endsection
