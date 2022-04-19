@extends('admin.layouts.template')

@section('title', 'Manage Roles')

@section('content')
    
@include('admin.partials.errors')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">

        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Administrador de Roles</h2>

        <div class="border-[#3c4045] border flex items-center rounded-md justify-between flex-wrap gap-6 bg-white mt-8 px-5 py-5 pb-60  mb-5">

          <div id="checkboxContainer" class="relative w-full overflow-x-auto sm:rounded-lg">
            <table class="w-full  text-left text-[#3c4045]">

              <thead class=" text-gray-700   border-b-2 border-[#3c4045] ">

                <tr class="w-full">
                  <th scope="col" class="px-6 py-3">
                    Role
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Crear
                  </th>
                  <th scope="col" class="px-6 py-3 text-left  ">
                    Ver
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Editar
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Borrar
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Ver otros
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Editar otros
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Borrar otros
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Todos
                  </th>
                </tr>

              </thead>
              <tbody class="text-[#343a40]">

                {{-- Admin --}}
                @foreach ($roles as $role)
                    
                <tr class="bg-white border-b hover:bg-gray-50 ">

                  <th class="px-6 py-4 font-normal">
                      <p class="text-old-gold" style="text-transform: capitalize">{{ $role->name }}</p>
                  </th>
                  @foreach ($permissions as $permission)
                      
                  <td class=" py-4 px-6 ">
                      <div class="flex items-center ">
                          <input name="{{ $role->id }}" id="{{$permission->id}}" value="{{$permission->name}}" type="checkbox" @roleCan($role->name, $permission->name) checked @endroleCan
                          class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                          <label for="checkbox-table-2" class="sr-only">checkbox</label>
                        </div>
                    </td>

                    @endforeach

                </tr>

                @endforeach

              </tbody>
            </table>

            <form action="">
              <div class="flex justify-center mb-6 mt-14">
                <button
                  class="bg-[#037bff] border border-transparent text-white py-1 px-20 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
                  Actualizar Roles
                </button>
              </div>
            </form>
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
