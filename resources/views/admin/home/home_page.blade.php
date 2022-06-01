@extends('admin.layouts.template')

@section('title', 'Home Page Controler')

@section('content')
    
@include('partials.alert')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
      <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página Home</h2>

      <!-- Hero Section -->
      <div class="border-[#3c4045] border bg-white mt-8 px-5 py-10 rounded-lg mb-5 flex flex-col items-center gap-y-5">
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
        <p class="text-[#343a40] text-xl font-bold mb-4">Home Cards</p>
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

              <div class="mb-4">

                <div class="flex items-center mb-3 gap-4">
                  <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                  <span class="text-[#343a40] font-bold">Titula de la tarjeta</span>
                </div>
                
                <input type="text"
                  name="name" id="name"
                  class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                  value="{{old('name')}}"
                  placeholder="Aa">

              </div>
              
              <div class="flex items-center mb-3">
                <span class="text-[#343a40] font-bold">Texto de la tarjeta</span>
              </div>

              <textarea name="description" id="description" rows="4" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Texto de la tarjeta"></textarea>

            </div>


            <div class="w-4/12 ">

              <div class="mb-4">

                <div class="flex items-center mb-3 gap-4">
                  <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                  <span class="text-[#343a40] font-bold">Card Title</span>
                </div>
                
                <input type="text"
                  name="name" id="name"
                  class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                  value="{{old('name')}}"
                  placeholder="Aa">

              </div>
              
              <div class="flex items-center mb-3">
                <span class="text-[#343a40] font-bold">Card Text</span>
              </div>

              <textarea name="description" id="description" rows="4" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Card Text"></textarea>

            </div>


          </div>
          <div class="flex justify-center mb-6 mt-10">
            <button
              class="bg-[#037bff] border border-transparent text-white py-1 px-20 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
              Guardar
            </button>
          </div>
        </form>
      </div>
    </section>
    {{-- End Content --}}

@endsection

@section('js')
    <script>

        
    document.getElementById('image_src').addEventListener('change', function(){
        previewImage('image_src','hero_image_container');
    })

    function previewImage(inputSource, targetID){
        const file = document.getElementById(inputSource).files[0];
        const imgSrc = URL.createObjectURL(file);

        const imageHolder = document.getElementById(targetID);

        imageHolder.setAttribute('src', imgSrc);
    }
    </script>
@endsection
