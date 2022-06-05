@extends('admin.layouts.template')

@section('title', 'Home Page Controler')

@section('content')
    
@include('partials.alert')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
      <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página Home</h2>

      <!-- Hero Section -->
      <div class="border-[#3c4045] border bg-white mt-8 px-5 py-10 rounded-lg mb-5 flex flex-col items-center gap-y-5">

      <p class="text-[#343a40] text-xl font-bold mb-4">Hero Image</p>


          <img id="hero_image_container" src="/storage/{{$hero->image_src}}" alt="Ibimarine Hero Image " class="w-4/5 h-96 object-cover">
            <form action="{{route('image.storeOrUpdate')}}" method="POST" enctype="multipart/form-data"> @csrf
 
                <div class="flex justify-center items-center my-2">
                    <input class="w-1/2 hidden" type="file" name="image" id="image_src">
                    <input class="w-1/2 hidden" type="text" name="image_id" id="image_id" value="{{$hero->id}}">
                    <input class="w-1/2 hidden" type="text" name="image_alt" id="image_alt" value="Ibimarine Image Hero">
                    <input class="w-1/2 hidden" type="text" name="belongs_to" id="belongs_to" value="home">
                    <input class="w-1/2 hidden" type="text" name="gallery_id" id="gallery_id" value=""> 
                    <input class="w-1/2 hidden" type="text" name="gallery_type" id="gallery_type" value="hero"> 

                    <button class="w-1/3 btn-off my-4" type="button" onclick="document.getElementById('image_src').click()"><i class="fa-solid fa-upload mr-1"></i>Subir imagen</button>
                </div>
                <div class="text-center">
                    <button
                        class="mx-auto bg-[#037bff] border border-transparent text-white py-1 px-20 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
                        Actualizar Imagen Principal
                    </button>
                </div>
            </form>
        </div>

      <!-- Cards Sections -->
      <div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">
        <p class="text-center text-[#343a40] text-xl font-bold mb-4">Home Cards</p>

        {{--
        <p class="text-[#343a40] text-xl font-bold mb-4">Agregar nueva</p>

         Create Card 
        <form action="{{route('admin.home.card.store')}}" method="POST" enctype="multipart/form-data"> @csrf
          <input type="file" name="image" id="image_create" hidden>
          <div class="flex mt-10 justify-between">
            <div class="w-3/12 ">
              <div class="flex items-center mb-3">
                <span class="text-[#343a40] font-bold mx-5">Imagen</span>
              </div>
              <div id="image_create_container" class="w-full border h-[9.7rem] relative cursor-pointer" onclick="document.getElementById('image_create').click()">
                <i class="text-old-black fa-solid fa-upload absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-xl"></i>
              </div>


              <div class="mt-4">
                <span class="text-[#343a40] font-bold">Ruta <span class="text-xs">(Por defecto es "home")</span></span>

                <input type="text"
                    name="route" id="route"
                    class="border-[#343a40] text-gray-700  appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                    value="{{ old('route') }}"
                    placeholder="home">
              </div>

            </div>

            <div class="w-4/12 ">

              <div class="mb-4">

                <div class="flex items-center mb-3 gap-4">
                  <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                  <span class="text-[#343a40] font-bold">Titula de la tarjeta</span>
                </div>
                
                <input type="text"
                  name="title" id="title"
                  class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                  value="{{ old('title') }}"
                  placeholder="Aa">

              </div>
              
              <div class="flex items-center mb-3">
                <span class="text-[#343a40] font-bold">Texto de la tarjeta</span>
              </div>

              <textarea name="description" id="description" rows="4" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Texto de la tarjeta">{{ old('description') }}</textarea>

            </div>


            <div class="w-4/12 ">

              <div class="mb-4">

                <div class="flex items-center mb-3 gap-4">
                  <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                  <span class="text-[#343a40] font-bold">Card Title</span>
                </div>
                
                <input type="text"
                  name="title_en" id="title_en"
                  class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                  value="{{old('title_en')}}"
                  placeholder="Aa">

              </div>
              
              <div class="flex items-center mb-3">
                <span class="text-[#343a40] font-bold">Card Text</span>
              </div>

              <textarea name="description_en" id="description_en" rows="4" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Card Text">{{ old('description_en') }}</textarea>

            </div>


          </div>
          <div class="flex justify-center mb-6 mt-10">
            <button
              class="bg-[#037bff] border border-transparent text-white py-1 px-20 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
              Guardar
            </button>
          </div>
        </form>
        --}}

        {{-- Space Between Add new Card and Update --}}
        <hr>
        <div class="h-36 w-ful"></div>

        <!-- <p class="text-[#343a40] text-xl font-bold mb-4">Editar</p> -->

        {{-- Update Card --}}
        @foreach($cards as $card)
        <p class="text-center text-[#343a40] text-xl font-bold mb-4">{{$card->title}}</p>

        <form class="mb-4" action="{{route('admin.home.card.update', $card)}}" method="POST" enctype="multipart/form-data"> @csrf @method('PATCH')
          <input type="file" name="image" id="image_{{$card->id}}" onchange="previewBackgroundImage('image_{{$card->id}}', 'image_{{$card->id}}_container')" hidden>
          <div class="flex mt-10 justify-between">
            <div class="w-3/12 ">
              <div class="flex items-center mb-3">
                <span class="text-[#343a40] font-bold mx-5">Imagen</span>
              </div>
              <div id="image_{{$card->id}}_container" style="background: url('/storage/{{$card->image}}'); background-size: cover; opacity: .9" class="max-w-full w-[265px] border h-[9.7rem] relative cursor-pointer" onclick="document.getElementById('image_{{$card->id}}').click()">
                <i class="text-old-black fa-solid fa-upload absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-xl"></i>
              </div>

              <div class="mt-4">
                <span class="text-[#343a40] font-bold">Ruta</span></span>

                <input type="text"
                    name="route" id="route"
                    class="border-[#343a40] text-gray-700  appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                    value="{{ old('route', $card->route) }}"
                    placeholder="home">
              </div>
            </div>

            <div class="w-4/12 ">

              <div class="mb-4">

                <div class="flex items-center mb-3 gap-4">
                  <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                  <span class="text-[#343a40] font-bold">Titula de la tarjeta</span>
                </div>
                
                <input type="text"
                  name="title" id="title"
                  class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                  value="{{ old('title', $card->title) }}"
                  placeholder="Aa">

              </div>
              
              <div class="flex items-center mb-3">
                <span class="text-[#343a40] font-bold">Texto de la tarjeta</span>
              </div>

              <textarea name="description" id="description" rows="4" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Texto de la tarjeta">{{ old('description', $card->description) }}</textarea>

            </div>


            <div class="w-4/12 ">

              <div class="mb-4">

                <div class="flex items-center mb-3 gap-4">
                  <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                  <span class="text-[#343a40] font-bold">Card Title</span>
                </div>
                
                <input type="text"
                  name="title_en" id="title_en"
                  class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                  value="{{old('title_en',$card->title_en)}}"
                  placeholder="Aa">

              </div>
              
              <div class="flex items-center mb-3">
                <span class="text-[#343a40] font-bold">Card Text</span>
              </div>

              <textarea name="description_en" id="description_en" rows="4" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Card Text">{{ old('description_en', $card->description_en) }}</textarea>

            </div>


          </div>
          <div class="flex justify-center mb-6 mt-10">
            <input type="submit"
              class="bg-[#037bff] border border-transparent text-white py-1 px-20 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300"
              value="Actualizar"
              >
            {{--
            <a href="{{route('admin.home.card.delete', $card)}}">
                <button type="button"
                    class="ml-4 bg-red-600 border border-transparent text-white py-1 px-20 rounded-md hover:text-red-600 hover:border-red-600 hover:bg-white hover:border transition-all ease-out duration-300 "        
                >Eliminar</button>
            </a>
            --}} 

          </div>
        </form>
        <br/>
        <hr/>
        <br/>
        <br/>
        @endforeach
      </div>
    </section>
    {{-- End Content --}}

@endsection

@section('js')
    <script>

    // Hero Preview Image
    document.getElementById('image_src').addEventListener('change', function(){
        previewImage('image_src','hero_image_container');
    })

    // Add Card Preview Image
    document.getElementById('image_create').addEventListener('change', function(){
        previewBackgroundImage('image_create','image_create_container');
    })

    function previewImage(inputSource, targetID){
        const file = document.getElementById(inputSource).files[0];
        const imgSrc = URL.createObjectURL(file);

        const imageHolder = document.getElementById(targetID);

        imageHolder.setAttribute('src', imgSrc);
    }
    function previewBackgroundImage(inputSource, targetID){
        const file = document.getElementById(inputSource).files[0];
        const imgSrc = URL.createObjectURL(file);

        const imageHolder = document.getElementById(targetID);

        imageHolder.setAttribute('style', 'background: url('+imgSrc+'); background-size: cover');
    }
    </script>
@endsection
