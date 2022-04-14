@extends('admin.layouts.template')

@section('title', 'Add new Rent Boat')

@section('content')
    


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página de Alquiler</h2>
        <div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">
          <p class="text-[#343a40] text-xl font-bold mb-2">Listado de embarcaciones publicadas</p>
          <div class="flex flex-wrap gap-x-12 gap-y-20 mt-5">
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">ASTROMAR <span class="italic">42</span></p>
              <img src="{{asset('img/rent/rent-02.jpeg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">CRANCHI <span class="italic">41</span></p>
              <img src="{{asset('img/rent/rent-04.jpeg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">ASTROMAR <span class="italic">42</span></p>
              <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">CRANCHI <span class="italic">41</span></p>
              <img src="{{asset('img/rent/rent-01.jpg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">ASTROMAR <span class="italic">42</span></p>
              <img src="{{asset('img/rent/rent-02.jpeg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">CRANCHI <span class="italic">41</span></p>
              <img src="{{asset('img/rent/rent-04.jpeg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">ASTROMAR <span class="italic">42</span></p>
              <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">ASTROMAR <span class="italic">42</span></p>
              <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">CRANCHI <span class="italic">41</span></p>
              <img src="{{asset('img/rent/rent-01.jpg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">ASTROMAR <span class="italic">42</span></p>
              <img src="{{asset('img/rent/rent-02.jpeg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">CRANCHI <span class="italic">41</span></p>
              <img src="{{asset('img/rent/rent-04.jpeg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
            <article class="flex flex-col items-center justify-center gap-y-2">
              <p class="text-sm">ASTROMAR <span class="italic">42</span></p>
              <img src="{{asset('img/home/home-04.jpg')}}" alt="" class="w-28 h-24 object-cover">
              <div class="flex items-center justify-center gap-4 ">
                <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                <button class=""><i
                    class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
              </div>
            </article>
          </div>
        </div>
        <div class="border-[#3c4045] border bg-white mt-8 px-5 py-5 rounded-lg mb-5">
          <p class="text-[#343a40] text-xl font-bold mb-4">Nueva Embarcación de ALQUILER</p>
          <div class="p-5 flex flex-wrap border-[#3c4045] border justify-between mb-10">
            <div class="flex items-center w-4/5">
              <img src="{{asset('img/lang_es.png')}}" class="w-10 h-8 object-cover" alt="">
              <span class="text-[#343a40] font-bold mx-5">Nombre</span>
              <input type="text"
                class="border-[#343a40] text-gray-700 appearance-none leading-tight font-bold border  w-full py-[6px] rounded-md  pl-2 outline-none "
                placeholder="Nombre de la Embarcación">
            </div>
            <div class="flex items-center w-1/5 justify-end">
              <span class="text-[#343a40] font-bold mx-5">Recomendada</span>
              <input type="checkbox" class="w-8 border-red-500">
            </div>
          </div>
          <div class="p-5 flex flex-wrap gap-y-5 border-[#3c4045] border gap-x-16">
            <span class="text-[#343a40] font-bold">Iconos</span>
            <div class="flex items-center gap-2">
              <img src="{{asset('img/yacht_icons/users.png')}}" alt="" class="w-8 object-cover">
              <input type="checkbox">
            </div>
            <div class="flex items-center gap-2">
              <img src="{{asset('img/yacht_icons/captain.png')}}" alt="" class="w-8 object-cover">
              <input type="checkbox">
            </div>
            <div class="flex items-center gap-2">
              <img src="{{asset('img/yacht_icons/air-conditioner.png')}}" alt="" class="w-8 object-cover">
              <input type="checkbox">
            </div>
            <div class="flex items-center gap-2">
              <img src="{{asset('img/yacht_icons/shower.png')}}" alt class="w-8 object-cover">
              <input type="checkbox">
            </div>
            <div class="flex items-center gap-2">
              <img src="{{asset('img/yacht_icons/drinks.png')}}" alt="" class="w-8 object-cover">
              <input type="checkbox">
            </div>
            <div class="flex items-center gap-2">
              <img src="{{asset('img/yacht_icons/sports.png')}}" alt="" class="w-8 object-cover">
              <input type="checkbox">
            </div>
            <div class="flex items-center gap-2">
              <img src="{{asset('img/yacht_icons/music.png')}}" alt="" class="w-8 object-cover">
              <input type="checkbox">
            </div>
  
  
  
          </div>
  
          <div class="flex mt-10 gap-x-8">
            <div class="w-full ">
              <div class="flex items-center mb-3">
                <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                <span class="text-[#343a40] font-bold mx-5">Descripción de embarcación</span>
              </div>
              <textarea name="" id="" rows="8" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Descripción y texto de la embarcación"></textarea>
            </div>
            <div class="w-full ">
              <div class="flex items-center mb-3">
                <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                <span class="text-[#343a40] font-bold mx-5">Ship description</span>
              </div>
              <textarea name="" id="" rows="8" class="border-[#3c4045] border w-full p-5 outline-none text-gray-700"
                placeholder="Descripción y texto de la embarcación"></textarea>
            </div>
          </div>
  
          <div class="mt-10">
            <p class="text-[#343a40] font-bold">Características de la embarcación</p>
            <div class="border-[#3c4045] border flex flex-wrap p-5 justify-between gap-y-5">
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="length">Length</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                  id="length">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="beam">Beam</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                  id="beam">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="engines">Engines</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                  id="engines">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="c_velocity">Cruising velocity</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-52 pl-2 outline-none "
                  id="c_velocity">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="max_speed">Max speed</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-28 pl-2 outline-none "
                  id="max_speed">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="max_speed">Fuel Consumtion</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-60 pl-2 outline-none "
                  id="max_speed">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="max_speed">Pax</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                  id="max_speed">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="max_speed">Bathroom</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                  id="max_speed">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="max_speed">Cabins</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-14 pl-2 outline-none "
                  id="max_speed">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="max_speed">Year</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-32 pl-2 outline-none "
                  id="max_speed">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="max_speed">Port</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-64 pl-2 outline-none "
                  id="max_speed">
              </div>
              <div class="flex items-center gap-3">
                <label class="text-[#343a40]" for="max_speed">Model</label>
                <input type="text"
                  class="border-[#343a40] text-gray-700 appearance-none leading-tight border py-[6px] rounded-md  w-64 pl-2 outline-none "
                  id="max_speed">
              </div>
            </div>
          </div>
  
          <div class="flex border-[#343a40] p-5 border my-10 flex-wrap justify-between">
            <div class="w-1/2 flex justify-start">
              <span class="text-[#343a40] font-bold mr-5">Precio Temporada Baja</span>
              <input type="text"
                class="border-[#343a40] w-7/12 text-gray-700 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none ">
            </div>
            <div class="w-1/2 flex ">
              <span class="text-[#343a40] font-bold mx-5">Precio Temporada Alta</span>
              <input type="text"
                class="border-[#343a40] w-7/12 text-gray-700 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none ">
            </div>
  
          </div>
  
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
  
          <div class="my-10">
            <p class="text-[#343a40] font-bold">Embarcaciones similares</p>
            <div class="flex flex-wrap gap-x-14 gap-y-5  mt-5 border border-[#343a40] p-5">
              <div class="flex items-center">
                <input type="checkbox" class="" id="sessa_marine_c44">
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
              <button class="bg-[#037bff] border border-transparent text-white py-1 px-10 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">Agregar Embarcación</button>
            </div>
          </div>
        </div>
  
      </section>
    {{-- End Content --}}

@endsection
