@extends('admin.layouts.template')

@section('title', 'Marcas')

@section('content')
    
@include('partials.alert')

{{-- Update Menu Modal --}}
@include('admin.brands.edit-brand-modal')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página de Marcas</h2>
        {{-- Form To Create New Menu Item --}}
        <form method="POST" action="{{route('admin.brands.store')}}" enctype="multipart/form-data"> @csrf
          <div
            class="grid grid-cols-3 border-[#3c4045] border bg-white mt-8 px-5 py-5  mb-5">
            <div class="">
              <span class="text-[#343a40] font-bold mx-3">Nombre de la Marca</span>
              <input type="text"
                name="name" id="name"
                class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                placeholder="New Brand">
            </div>
            <div class="">
              <span class="text-[#343a40] font-bold mx-3">Slug de la Marca</span>
              <input type="text"
                name="slug" id="slug"
                class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                placeholder="new-brand">
            </div>
            <div class="">
              <span class="text-[#343a40] font-bold mx-3">Imagen de la marca</span>
              <div>
                <input type="file" name="image" id="image" hidden>
                <button class="w-1/3 btn-off" type="button" onclick="document.getElementById('image').click()"><i class="fa-solid fa-upload mr-1"></i>Subir imagen</button>
              </div>
            </div>

            <button
            class="mt-4 bg-[#037bff] border border-transparent text-white py-1 px-6 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
            Agregar Marca
            </button>
          </div>
        </form>
  
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
                      <span class="text-[#343a40] font-bold mx-3">Nombre de la marca</span>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <div class="flex items-center ">
                      <span class="text-[#343a40] font-bold mx-3">Imagen de la marca</span>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody class="text-[#343a40] font-bold">

                @foreach ($brands as $brand)
                    
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    {{$brand->id}}
                  </th>
                  <td class="py-4 pl-12" data-name-es="{{$brand->name}}">
                    {{$brand->name}}
                  </td>
                  <td class="pl-12 py-4" data-name-en="{{$brand->slug}}">
                    {{$brand->slug}}
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button title="Editar Elemento" data-open-modal="update-brand-modal" id="id_{{$brand->name}}_{{$brand->id}}"><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                        <form method="POST" action="{{route('admin.brands.delete', $brand)}}">
                        @csrf @method('DELETE')
                        <button ><i
                            class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                        </div>
                        </form>
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
<script src="{{asset('/vendor/axios.min.js')}}"></script>
<script> const ROUTE = "{{route('admin.brands.getByAjax')}}";</script>

<script>

ToggleModal('update-brand-modal',{
  onOpen: function(trigger){
    const BrandID = trigger.getAttribute('id').split('_')[2];
    const BrandName = trigger.getAttribute('id').split('_')[1];
    getElementById('brand_id').value = BrandID;
    
    getBrandByAjax(BrandID);
  },
  onClose: function(trigger){
    getElementById('upload_image_form').reset();
  },
  closeOnClickOut: 'inner-brand-modal',
});

function getBrandByAjax(ID = 0){
    axios.get(ROUTE + '/' + ID)
        .then(function(response){
            const brand = response.data;
            getElementById('name').value = brand.name;
            getElementById('slug').value = brand.slug;
            console.log(response);
        })
        .catch(function(error) {
            console.log(error)
        })
}

</script>
    
@endsection
