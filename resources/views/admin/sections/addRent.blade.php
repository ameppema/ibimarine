@extends('admin.layouts.template')

@section('title', 'Añadir nueva embarcación')

@section('content')
    
@include('admin.partials.errors')
@include('admin.partials.upload-image')

    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página de Alquiler</h2>
        {{-- Published Boats --}}
        @include('admin.sections.boats.published-boats')


        <div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">

            <p class="text-[#343a40] text-xl font-bold mb-4">Nueva Embarcación de ALQUILER</p>
            <form method="POST" action="{{route('admin.rent.store')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="temporal_token" id="temporal_token" value="{{makeToken(9)}}">
                {{-- Name - Is recomended --}}
                <div class="p-5 flex flex-wrap border-[#3c4045] border justify-between mb-10">
                  
                  <div class="flex items-center w-4/5">
                    <span class="text-[#343a40] font-bold mx-5">Nombre</span>
                    <input type="text"
                      name="name" value="{{old('name')}}"
                      class="border-[#343a40] text-gray-700 appearance-none leading-tight font-bold border  w-full py-[6px] rounded-md  pl-2 outline-none "
                      placeholder="Nombre de la Embarcación">
                  </div>
                  <div class="flex items-center w-1/5 justify-end">
                    <span class="text-[#343a40] font-bold mx-5">Recomendada</span>
                    <input name="is_recomended" type="checkbox" class="w-8 ring-black">
                  </div>

                </div>
                {{-- Addition Icons --}}
                @include('admin.sections.boats.additions')
        
                {{-- Description --}}
                <div class="flex mt-10 gap-x-8">
                  <div class="w-full ">
                    <div class="flex items-center mb-3">
                      <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                      <span class="text-[#343a40] font-bold mx-5">Descripción de embarcación</span>
                    </div>
                    <textarea name="description" id="" rows="8" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                      placeholder="Descripción y texto de la embarcación">{{old('description')}}</textarea>
                  </div>
                  <div class="w-full ">
                    <div class="flex items-center mb-3">
                      <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                      <span class="text-[#343a40] font-bold mx-5">Ship description</span>
                    </div>
                    <textarea name="description_en" id="" rows="8" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                      placeholder="Descripción y texto de la embarcación">{{old('description_en')}}</textarea>
                  </div>
                </div>
        
                {{-- Features --}}
                @include('admin.sections.boats.features')
        
                {{-- Prices --}}
                <div class="flex border-[#343a40] p-5 border my-10 flex-wrap justify-between">
                  <div class="w-1/2 flex justify-start">
                    <span class="text-[#343a40] font-bold mr-5">Precio Temporada Baja</span>
                    <input name="low_season_price" type="text" value="{{old('low_season_price')}}"
                      class="border-[#343a40] w-7/12 text-gray-700 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none ">
                  </div>
                  <div class="w-1/2 flex ">
                    <span class="text-[#343a40] font-bold mx-5">Precio Temporada Alta</span>
                    <input type="text" value="{{old('high_season_price')}}"
                       name="high_season_price" class="border-[#343a40] w-7/12 text-gray-700 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none ">
                  </div>
        
                </div>
        
                {{-- Gallery --}}
                @include('admin.sections.boats.gallery')
        
                {{-- Similar Boats --}}
                @include('admin.sections.boats.similars')

                <div class="my-10 flex justify-center">
                  <input type="submit" class="bg-[#037bff] border border-transparent text-white py-1 px-10 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 " value="Agregar Embarcación">
                </div>

            </form>
        </div>
  
    </section>
    {{-- End Content --}}

@endsection

@section('js')

    <script>const ROUTE = "{{route('image.upload')}}";</script>
    <script src="{{asset('vendor/axios.min.js')}}"></script>
    <script src="{{asset('/js/utils.js')}}"></script>
    <script>
        const uniqueToken = document.getElementById('temporal_token').value;
        const UploadImageForm = document.getElementById('upload_image_form');
        
        UploadImageForm.addEventListener('submit', function(e){
            e.preventDefault();
            const imgSrc = document.getElementById("image_src").files[0];
            const formData = new FormData();

            formData.append('image', imgSrc, imgSrc.name)
            formData.append('image_alt', document.getElementById('image_alt').value);
            formData.append('belongs_to', document.getElementById('belongs_to').value);
            formData.append('gallery_type', document.getElementById('gallery_type').value);
            formData.append('sort_order', document.getElementById('sort_order').value);
            formData.append('gallery_id', uniqueToken);

            const settings = { 
                headers: { 
                    'content-type': 'multipart/form-data', 
                    'X-CSRF-TOKEN' : '{{ csrf_token() }}'
                } 
            }

            UploadImageByAjax(ROUTE, formData, settings);
        });

        function UploadImageByAjax(url, params, settings){
            axios.post(url, params, settings)
            .then(function(response){
                console.log(response);
                const imageEl = document.createElement('IMG');
                const imageSlot = document.getElementById('sort_order');
                imageEl.setAttribute('src', '/storage/'+response.data.data.image_src);
                imageEl.classList.add('w-36', 'h-24', 'object-cover')
                document.getElementById('image_'+imageSlot.value+'_slot').appendChild(imageEl);
                document.getElementsByName('image_'+imageSlot.value)[0].value = response.data.data.id;
            })
            .catch(function(error){
                alert('Error al intentar subir su imagen');
                console.log(error);
            });
        }

        ToggleModal('upload-image-modal', {
            onOpen: function(trigger){
                document.getElementById('sort_order').value = trigger.id.split('_')[1];
            },
            onClose: function(trigger){
                UploadImageForm.reset();
            }
        });
    </script>
@endsection
