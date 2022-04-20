@extends('admin.layouts.template')

@section('title', 'Edit rent boat')

@section('content')
    
@include('admin.partials.errors')

    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página de Alquiler EDITAR</h2>

        <div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">

            <p class="text-[#343a40] text-xl font-bold mb-4">Editar Embarcación de ALQUILER</p>
            <form method="POST" action="{{route('admin.rent.update', $boat)}}" enctype="multipart/form-data">
                @csrf
                {{-- Name - Is recomended --}}
                <div class="p-5 flex flex-wrap border-[#3c4045] border justify-between mb-10">
                  
                  <div class="flex items-center w-4/5">
                    <span class="text-[#343a40] font-bold mx-5">Nombre</span>
                    <input type="text"
                      name="name"
                      class="border-[#343a40] text-gray-700 appearance-none leading-tight font-bold border  w-full py-[6px] rounded-md  pl-2 outline-none "
                      placeholder="Nombre de la Embarcación"
                      value="{{ $boat->name }}"
                      >
                  </div>
                  <div class="flex items-center w-1/5 justify-end">
                    <span class="text-[#343a40] font-bold mx-5">Recomendada</span>
                    <input value="$boat->is_recomended" {{ $boat->is_recomended === 1 ? 'checked' :'' }} name="is_recomended" type="checkbox" class="w-8 border-red-500">
                  </div>

                </div>
                {{-- additions Icons --}}
                <div class="p-5 flex flex-wrap gap-y-5 border-[#3c4045] border gap-x-16">
                  <span class="text-[#343a40] font-bold">Adiciones</span>

                  @foreach ($additions as $addition)

                  <div class="flex items-center gap-2">
                    <img src="{{asset($addition->icon)}}" alt="" class="w-8 object-cover">
                    <input name="{{$addition->name}}" type="checkbox" value="{{$addition->id}}" {{ $boat->additions->contains($addition) ? 'checked' : ''}}>
                  </div>
                  
                  @endforeach
        
                </div>
        
                {{-- Description --}}
                <div class="flex mt-10 gap-x-8">
                  <div class="w-full ">
                    <div class="flex items-center mb-3">
                      <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                      <span class="text-[#343a40] font-bold mx-5">Descripción de embarcación</span>
                    </div>
                    <textarea name="description_es" id="" rows="8" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                      placeholder="Descripción y texto de la embarcación">{{ old($boat->description) ?? $boat->description }}</textarea>
                  </div>
                  <div class="w-full ">
                    <div class="flex items-center mb-3">
                      <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                      <span class="text-[#343a40] font-bold mx-5">Ship description</span>
                    </div>
                    <textarea name="description_en" id="" rows="8" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                      placeholder="Descripción y texto de la embarcación"></textarea>
                  </div>
                </div>
        
                {{-- Features --}}
                <div class="mt-10">
                  <p class="text-[#343a40] font-bold">Características de la embarcación</p>
                  <div class="border-[#3c4045] border flex flex-wrap p-5 justify-between gap-y-5">
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="length">Length</label>
                      <input type="text"
                        value="{{ $boat->features->length }}"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                        name="length">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="beam">Beam</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                        value="{{$boat->features->beam}}"
                        name="beam">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="engines">Engines</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                        value="{{$boat->features->engines}}"
                        name="engines">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="c_velocity">Cruising velocity</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-52 pl-2 outline-none "
                        value="{{$boat->features->c_velocity}}"
                        name="c_velocity">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="max_speed">Max speed</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-28 pl-2 outline-none "
                        value="{{$boat->features->max_speed}}"
                        name="max_speed">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="fuel_comsuption">Fuel Consuption</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-60 pl-2 outline-none "
                        value="{{$boat->features->fuel_comsuption}}"
                        name="fuel_comsuption">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="pax">Pax</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                        value="{{$boat->features->pax}}"
                        name="pax">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="bathroom">Bathroom</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                        value="{{$boat->features->bathroom}}"
                        name="bathroom">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="cabins">Cabins</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-14 pl-2 outline-none "
                        value="{{$boat->features->cabins}}"
                        name="cabins">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="year">Year</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                        value="{{$boat->features->model}}"
                        name="year">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="port">Port</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-64 pl-2 outline-none "
                        value="{{$boat->features->port}}"
                        name="port">
                    </div>
                    <div class="flex items-center gap-3">
                      <label class="text-[#343a40]" for="model">Model</label>
                      <input type="text"
                        class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-64 pl-2 outline-none "
                        value="{{$boat->features->model}}"
                        name="model">
                    </div>
                  </div>
                </div>
        
                {{-- Prices --}}
                <div class="flex border-[#343a40] p-5 border my-10 flex-wrap justify-between">
                  <div class="w-1/2 flex justify-start">
                    <span class="text-[#343a40] font-bold mr-5">Precio Temporada Baja</span>
                    <input name="low_season_price" type="text"
                      class="border-[#343a40] w-7/12 text-gray-700 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                      value="{{$boat->low_season_price}}"
                      >
                  </div>
                  <div class="w-1/2 flex ">
                    <span class="text-[#343a40] font-bold mx-5">Precio Temporada Alta</span>
                    <input type="text"
                       name="high_season_price" class="border-[#343a40] w-7/12 text-gray-700 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                       value="{{$boat->high_season_price }}"
                       >
                  </div>
        
                </div>
        
                {{-- Gallery --}}
                <div class="">
                  <p class="text-[#343a40] font-bold">Fotos de la embarcación</p>
                  <div class="flex flex-wrap gap-x-8 gap-y-20 mt-5 border border-[#343a40] p-5">
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#1</p>
                        <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
        
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#2</p>
                        <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#3</p>
                        <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#4</p>
                        <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#5</p>
                        <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#6</p>
                        <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#7</p>
                        <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#8</p>
                        <button><i class="fa-solid fa-upload text-white bg-[#b2b2b2] p-2 rounded-md"></i></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-[#b2b2b2] text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#9</p>
                        <button><i class="fa-solid fa-upload text-white bg-[#b2b2b2] p-2 rounded-md"></i></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-[#b2b2b2] text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
                    <article class="flex flex-col items-center justify-center gap-y-2">
                      <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-36 h-24 object-cover">
                      <div class="flex items-center justify-center gap-2 ">
                        <p class="text-[#343a40] font-bold ">#10</p>
                        <button><i class="fa-solid fa-upload text-white bg-[#b2b2b2] p-2 rounded-md"></i></i></button>
                        <button class=""><i
                            class="fa-solid fa-xmark text-white bg-[#b2b2b2] text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </article>
                  </div>
                </div>
        
                {{-- Similar Boats --}}
                <div class="my-10">
                  <p class="text-[#343a40] font-bold">Embarcaciones similares</p>
                  <div class="flex flex-wrap gap-x-14 gap-y-5  mt-5 border border-[#343a40] p-5">
                    <div class="flex items-center">
                      <input type="checkbox" class="" name="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Sessa Marine C44</label>
                    </div>
        
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Astromar 42</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Cranchi 41</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Pardo 50</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Pardo 50</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Suseeker Predator 68</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Pershing 62</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Princess V58</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Van Dutch 40</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Mangusta 80</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Alfamarine 78</label>
                    </div>
                    <div class="flex items-center">
                      <input type="checkbox" class="" id="sessa_marine_c44">
                      <label form="sessa_marine_c44" class="text-[#343a40] font-bold ml-2">Vanquish VQ54</label>
                    </div>
                  </div>
        
                  <div class="my-10 flex justify-center">
                    <input type="submit" class="bg-[#037bff] border border-transparent text-white py-1 px-10 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 " value="Guardar cambios">
                  </div>
                </div>

            </form>
        </div>
  
    </section>
    {{-- End Content --}}

@endsection
