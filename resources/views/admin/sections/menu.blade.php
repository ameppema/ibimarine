@extends('admin.layouts.template')

@section('title', 'Manage Roles')

@section('content')
    
@include('partials.alert')

{{-- Update Menu Modal --}}
@include('admin.partials.update-menu-modal')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página de Menú</h2>
        {{-- Form To Create New Menu Item --}}
        {{-- <form action="">
          <div
            class="border-[#3c4045] border flex items-center justify-between flex-wrap gap-6 bg-white mt-8 px-5 py-5  mb-5">
            <div class="flex items-center ">
              <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
              <span class="text-[#343a40] font-bold mx-3">Enlace</span>
              <input type="text"
                class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                placeholder="Agregar nuevo enlace en español">
            </div>
            <div class="flex items-center">
              <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
              <span class="text-[#343a40] font-bold mx-3">Link</span>
              <input type="text"
                class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                placeholder="Agregar nuevo enlace en inglés">
            </div>
            <button
              class="bg-[#037bff] border border-transparent text-white py-1 px-6 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
              Agregar a Navbar
            </button>
          </div>
        </form> --}}
  
        <div
          class="border-[#3c4045] border flex items-center justify-between flex-wrap gap-6 bg-white mt-8 px-5 py-5  mb-5">
          <div class="relative w-full overflow-x-auto sm:rounded-lg">
            <table class="w-full  text-left text-[#3c4045] ">
              <thead class=" text-gray-700   ">
                <tr class="w-full">
                  <th scope="col" class="px-6 py-3 w-1/5">
                    #
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <div class="flex items-center ">
                      <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover" alt="">
                      <span class="text-[#343a40] font-bold mx-3">Enlace</span>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <div class="flex items-center ">
                      <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover" alt="">
                      <span class="text-[#343a40] font-bold mx-3">Link</span>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody class="text-[#343a40] font-bold">

                @foreach ($menus as $menu)
                    
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    {{$menu->sort_order}}
                  </th>
                  <td class="py-4 pl-12" data-name-es="{{$menu->name_en}}">
                    {{$menu->name}}
                  </td>
                  <td class="pl-12 py-4" data-name-en="{{$menu->name_en}}">
                    {{$menu->name_en}}
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button title="Editar Elemento" data-open-modal="update-menu-modal" id="id_{{$menu->name_en}}_{{$menu->id}}"><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button type="button"><i
                        class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                      </div>
                    </td> 
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
  
        </div>
  
      </section>
    {{-- End Content --}}

@endsection

@section('js')
<script src="{{asset('/js/utils.js')}}"></script>

<script>

ToggleModal('update-menu-modal',{
  onOpen: function(trigger){
    const MenuId = trigger.getAttribute('id').split('_')[2];
    const MenuName = trigger.getAttribute('id').split('_')[1];
    getElementById('menu_id').value = MenuId;
    
    const NameES = document.querySelector('[data-name-es="'+MenuName+'"]').textContent;
    const NameEN = document.querySelector('[data-name-en="'+MenuName+'"]').textContent;
    
    getElementById('name').value = NameES.trim();
    getElementById('name_en').value = NameEN.trim();

  },
  onClose: function(trigger){
    getElementById('upload_image_form').reset();
  },
  closeOnClickOut: 'inner-menu-modal',
});

</script>
    
@endsection
