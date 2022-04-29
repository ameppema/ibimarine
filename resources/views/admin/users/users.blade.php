@extends('admin.layouts.template')

@section('title', 'Usuarios')

@section('content')
    
@include('admin.partials.errors')
@include('admin.users.update-user-modal')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Administrador de Usuarios</h2>
        <div
          class="border-[#3c4045] border flex items-center justify-between flex-wrap gap-6 bg-white mt-8 px-5 py-5 pb-60  mb-5">
          <div class="relative w-full overflow-x-auto sm:rounded-lg">
            <table class="w-full  text-left text-[#3c4045]  ">
              <thead class=" text-gray-700   border-b-2 border-[#3c4045] ">
                <tr class="w-full">
                  <th scope="col" class="px-6 py-3">
                    ID
                  </th>
                  <th scope="col" class="px-6 py-3 text-left  ">
                    Nombre
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Nickname
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Correo
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Rol
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Sesión
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Estado
                  </th>
                  <th scope="col" class="px-6 py-3">
                    Acciones
                  </th>
                </tr>
              </thead>
              <tbody class="text-[#343a40] ">

                @foreach ($users as $user)
                <tr class="bg-white border-b hover:bg-gray-50 ">
                  <th scope="row" class="px-6 py-4 whitespace-nowrap">
                    1
                  </th>
                  <td class=" py-4 px-6 ">
                    {{ $user->name }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $user->nickname }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $user->email }}
                  </td>
                  <td class="px-6 py-4 capitalize">
                    {{$user->roles[0]->name ?? 'Sin role' }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $user->last_session }}
                  </td>
                  <td class="px-6 py-4">
                    {{ $user->status === 1 ? 'Activo' : 'Inactivo' }}
                  </td>
                  <td class="px-6 py-4">
                    <div class="flex items-center  gap-4 ">
                      <!-- Trigger/Open The Modal -->
                      <button id="{{$user->id}}" data-open-modal="update-user-modal"><i
                          class="fa-solid fa-pencil text-white bg-green-600 p-2 text-base rounded-md"></i></button>
                      <button class=""><i
                          class="fa-solid fa-xmark text-white bg-red-600 text-2xl rounded-md py-1 px-2"></i></button>
                    </div>
                  </td>
  
                </tr>
                @endforeach


              </tbody>
            </table>
            <form action="">
              <div class="flex justify-center mb-6 mt-14">
                <button
                  class="bg-[#037bff] border border-transparent text-white py-1 px-20 rounded-md hover:text-[#037bff] hover:border-[#037bff] hover:bg-white hover:border transition-all ease-out duration-300 ">
                  Agregar Nuevo Usuario
                </button>
              </div>
            </form>
          </div>
  
        </div>
  
      </section>
    {{-- End Content --}}

@endsection

@section('js')
<script src="{{asset('/js/utils.js')}}"></script>
<script src="{{asset('/vendor/axios.min.js')}}"></script>
<script>const ROUTE = "{{route('admin.users.getByAjax')}}";</script>
<script>
    ToggleModal('update-user-modal',{
        onOpen: function(trigger){
            const userID = trigger.id;
            getUserByAjax(userID);
        },
        closeOnClickOut: 'inner-modal'
    })

    function getUserByAjax(ID){
        axios.get(ROUTE + '/' + ID)
            .then( response => {
                const user = response.data;
                console.log(user)
                getElementById('name').value = user.name;
                getElementById('nickname').value = user.nickname;
                getElementById('role').value = user.roles[0].id;
                getElementById('status').value = user.status;
                getElementById('user_id').value = user.id;
            })
            .catch( error => console.log(error))
    }
</script>

@endsection
