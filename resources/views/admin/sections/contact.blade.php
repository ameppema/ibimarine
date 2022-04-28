@extends('admin.layouts.template')

@section('title', 'Manage Roles')

@section('content')
    
@include('admin.partials.errors')

    {{-- Cotent --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página Contacto</h2>
        <div class="border-[#3c4045] border bg-white mt-8 px-5 py-10 rounded-lg mb-5 flex flex-col items-center gap-y-5">
          <img src="/storage/{{$contact->getCover()->image_src}}" alt="Contact Main Image " class="w-4/5 h-96 object-cover">
          {{-- <img src="{{asset('/img/contact/contact_ibimarine.jpg')}}" alt="Contact Main Image " class="w-4/5 h-96 object-cover"> --}}
            <form action="{{route('admin.contact.update')}}" method="POST" enctype="multipart/form-data"> @csrf
                <div class="w-full flex gap-5">
                    <div>
                        <div class="flex mb-2">
                            <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover mr-1" alt="">
                            <p>Texto en español</p>
                        </div>
                        <textarea name="description" id="" cols="42" rows="10">{{$contact->description}}</textarea>
                    </div>
                    <div>
                        <div class="flex mb-2">
                            <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover mr-1" alt="">
                            <p>Texto en ingles</p>
                        </div>
                        <textarea name="description_en" id="" cols="42" rows="10">{{$contact->description_en}}</textarea>
                    </div>
                </div>
                <div class="flex justify-center items-center my-2">
                    <input class="w-1/2 hidden" type="file" name="image" id="image" value="">
                    <input class="w-1/2 hidden" type="text" name="image_alt" id="image_alt" value="Image Contact">
                    <input class="w-1/2 hidden" type="text" name="belongs_to" id="belongs_to" value="contact">
                    <input class="w-1/2 hidden" type="text" name="gallery_id" id="gallery_id" value="{{$contact->id}}"> 
                    <input class="w-1/2 hidden" type="text" name="gallery_type" id="gallery_type" value="cover"> 

                    <button class="w-1/3 btn-off" type="button" onclick="document.getElementById('image').click()"><i class="fa-solid fa-upload mr-1"></i>Subir imagen</button>
                </div>
                <div class="text-center">
                    <button
                        class="mx-auto bg-[#037bff] border border-transparent text-white py-1 px-20 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
      </section>

    {{-- End Content --}}

@endsection

@section('js')
    
@endsection
