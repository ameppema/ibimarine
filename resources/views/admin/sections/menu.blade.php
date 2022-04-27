@extends('admin.layouts.template')

@section('title', 'Manage Roles')

@section('content')
    
@include('admin.partials.errors')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Página de Menú</h2>
        <form action="">
          <div
            class="border-[#3c4045] border flex items-center justify-between flex-wrap gap-6 bg-white mt-8 px-5 py-5  mb-5">
            <div class="flex items-center ">
              <img src="/assets/images/varios/lang_es.png" class="w-8 h-6 object-cover" alt="">
              <span class="text-[#343a40] font-bold mx-3">Enlace</span>
              <input type="text"
                class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                placeholder="Agregar nuevo enlace en español">
            </div>
            <div class="flex items-center">
              <img src="/assets/images/varios/lang_en.png" class="w-8 h-6 object-cover" alt="">
              <span class="text-[#343a40] font-bold mx-3">Enlace</span>
              <input type="text"
                class="border-[#343a40] text-gray-700 w-80 appearance-none leading-tight font-bold border py-[6px] rounded-md  pl-2 outline-none "
                placeholder="Agregar nuevo enlace en inglés">
            </div>
            <button
              class="bg-[#037bff] border border-transparent text-white py-1 px-6 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
              Agregar a Navbar
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
                    Orden
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <div class="flex items-center ">
                      <img src="/assets/images/varios/lang_es.png" class="w-8 h-6 object-cover" alt="">
                      <span class="text-[#343a40] font-bold mx-3">Enlace</span>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    <div class="flex items-center ">
                      <img src="/assets/images/varios/lang_en.png" class="w-8 h-6 object-cover" alt="">
                      <span class="text-[#343a40] font-bold mx-3">Enlace</span>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody class="text-[#343a40] font-bold">
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    1
                  </th>
                  <td class=" py-4 pl-12 ">
                    Inicio
                  </td>
                  <td class="pl-12 py-4">
                    Home
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    2
                  </th>
                  <td class=" py-4 pl-12 ">
                    Menú
                  </td>
                  <td class="pl-12 py-4">
                    Menu
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    3
                  </th>
                  <td class=" py-4 pl-12 ">
                    Alquiler
                  </td>
                  <td class="pl-12 py-4">
                    Rent
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    4
                  </th>
                  <td class=" py-4 pl-12 ">
                    Venta
                  </td>
                  <td class="pl-12 py-4">
                    Sale
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    5
                  </th>
                  <td class=" py-4 pl-12 ">
                    Toys
                  </td>
                  <td class="pl-12 py-4">
                    Toys
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    6
                  </th>
                  <td class=" py-4 pl-12 ">
                    Eventos
                  </td>
                  <td class="pl-12 py-4">
                    Events
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    7
                  </th>
                  <td class=" py-4 pl-12 ">
                    Noticias
                  </td>
                  <td class="pl-12 py-4">
                    News
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    8
                  </th>
                  <td class=" py-4 pl-12 ">
                    Contacto
                  </td>
                  <td class="pl-12 py-4">
                    Contact
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    9
                  </th>
                  <td class=" py-4 pl-12 ">
                    Área privada
                  </td>
                  <td class="pl-12 py-4">
                    Private Area
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    10
                  </th>
                  <td class=" py-4 pl-12 ">
                    Usuarios
                  </td>
                  <td class="pl-12 py-4">
                    Users
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    11
                  </th>
                  <td class=" py-4 pl-12 ">
                    Roles
                  </td>
                  <td class="pl-12 py-4">
                    Rols
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    12
                  </th>
                  <td class=" py-4 pl-12 ">
                    Permisos
                  </td>
                  <td class="pl-12 py-4">
                    Permissions
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    13
                  </th>
                  <td class=" py-4 pl-12 ">
                    Perfil
                  </td>
                  <td class="pl-12 py-4">
                    Profile
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <button><i class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
              </tbody>
            </table>
          </div>
  
        </div>
  
      </section>
    {{-- End Content --}}

@endsection

@section('js')
<script src="{{asset('vendor/axios.min.js')}}"></script>

<script>
    const Route = "{{ route('admin.roles.setByAjax') }}";
    const DataContainer = document.getElementById('checkboxContainer');

    DataContainer.addEventListener('click', handleCheckbox);

    function handleCheckbox(e){

        if(!e.target.getAttribute('type') || e.target.getAttribute('type') != 'checkbox') return null;
        
        setPermissionByAjax(Route, getCheckBox(e.target))
    }

    function getCheckBox(Input){
        return {
            role: Input.name ,
            permission: Input.id,
            isChecked: Input.checked
        }
    }

    function setPermissionByAjax(Route, PostValue){
        axios.post(Route, {
            'X-CSRF-TOKEN' : '{{ csrf_token() }}',
            data: JSON.stringify(PostValue),
        })
        .then(function(response){
            console.log(response)
        })
        .catch(function(error){
            console.log(error)
        });
    }
</script>
    
@endsection
