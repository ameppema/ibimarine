@extends('admin.layouts.template')

@section('title', 'Perfil')

@section('content')
    
@include('admin.partials.errors')


    {{-- Content --}}
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6] px-5">
        <h2 class="text-[#3c4045] font-bold text-3xl mt-5 ">Perfil de Usuario - {{$user->name}}</h2>
        <form method="POST" action="{{route('admin.profile.update', $user)}}"> @csrf @method('PATCH')
          <div
            class="border-[#3c4045] border flex items-center rounded-md justify-between flex-wrap gap-6 bg-white mt-8 px-5 py-5   mb-5">
            <div class="relative w-full overflow-x-auto sm:rounded-lg">
              <table class="w-full  text-left text-[#3c4045]  ">
                <thead class=" text-gray-700   border-b border-[#3c4045] ">
                  <tr class="w-full">
                    <th scope="col" class="px-6 py-3">
                      ID
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                      Nombre Completo
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                      Nickname
                    </th>
                  </tr>
                </thead>
                <tbody class="text-[#343a40] ">
                  <tr class="">
                    <td class="pt-5  px-6">8</td>
                    <td class="max-w-xs pt-5">
                      <div class="flex items-center gap-2">
                        <input type="text"
                            name="name"
                            value="{{$user->name}}"
                            class="border-[#343a40] text-gray-700 w-96 appearance-none leading-tight border py-[6px] rounded-md pl-2 outline-none">
                        <button><i
                            class="fa-solid fa-pencil text-white bg-green-600 p-1 text-base rounded-md"></i></button>
                      </div>
                    </td>
                    <td class="max-w-xs pt-5 ">
                      <div class="flex items-center gap-2">
                        <input type="text"
                            name="nickname"
                            value="{{$user->nickname}}"
                            class="border-[#343a40] text-gray-700 w-96 appearance-none leading-tight border py-[6px] rounded-md pl-2 outline-none">
                        <button><i
                            class="fa-solid fa-pencil text-white bg-green-600 p-1 text-base rounded-md"></i></button>
                      </div>
                    </td>
                  </tr>
  
                </tbody>
              </table>
            </div>
          </div>
  
          <div
            class="border-[#3c4045] border flex items-center rounded-md justify-between flex-wrap gap-6 bg-white mt-8 px-5 py-5   mb-5">
            <div class="relative w-full overflow-x-auto sm:rounded-lg">
              <table class="w-full  text-left text-[#3c4045]  ">
                <thead class=" text-gray-700   border-b border-[#3c4045] ">
                  <tr class="w-full">
                    <th scope="col" class="px-6 py-3">
                      Correo
                    </th>
                    <th scope="col" class="px-6 py-3 pl-[4.1rem]">
                      Password
                    </th>
                    <th scope="col" class="px-6 py-3 pl-[2rem]">
                      Repetir password
                    </th>
                  </tr>
                </thead>
                <tbody class="text-[#343a40] ">
                  <tr class="">
                    <td class="max-w-xs pt-5 ">
                      <div class="flex items-center gap-2">
                        <input type="text"
                            name="email"
                            value="{{$user->email}}"
                            class="border-[#343a40] text-gray-700 w-96 appearance-none leading-tight border py-[6px] rounded-md pl-2 outline-none">
                        <button><i
                            class="fa-solid fa-pencil text-white bg-green-600 p-1 text-base rounded-md"></i></button>
                      </div>
                    </td>
                    <td class="max-w-xs pt-5 ">
                      <div class="flex items-center gap-2">
                        <input type="password" placeholder="************"
                            name="password"
                            class="border-[#343a40] text-gray-700 w-52 appearance-none leading-tight border py-[6px] rounded-md pl-2 outline-none">
                      </div>
                    </td>
                    <td class="max-w-xs pt-5 ">
                      <div class="flex items-center gap-2">
                        <input type="password" placeholder="************"
                            name="password_confirmation "
                            class="border-[#343a40] text-gray-700 w-52 appearance-none leading-tight border py-[6px] rounded-md pl-2 outline-none">
                      </div>
                    </td>
                  </tr>
  
                </tbody>
              </table>
            </div>
          </div>
  
          <div
            class="border-[#3c4045] border flex items-center rounded-md justify-between flex-wrap gap-6 bg-white mt-8 px-5 py-5   mb-5">
            <div class="relative w-full overflow-x-auto sm:rounded-lg">
              <table class="w-full  text-left text-[#3c4045]  ">
                <thead class=" text-gray-700   border-b border-[#3c4045] ">
                  <tr class="w-full">
                    <th scope="col" class="px-6 py-3">
                      Rol
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                      Estado
                    </th>
                    <th scope="col" class="px-6 py-3 ">
                      Última Sesión
                    </th>
                  </tr>
                </thead>
                <tbody class="text-[#343a40] ">
                  <tr>
                    <td class="px-6 py-3 capitalize">{{$user->roles[0]->name}}</td>
                    <td class="px-6 py-3">{{$user->status === 1 ? 'Activo' : 'Inactivo'}}</td>
                    <td class="px-6 py-3">{{$user->last_session}}</td>
                  </tr>
  
                </tbody>
              </table>
            </div>
          </div>
  
          <div class="flex justify-center items-center gap-x-4 mt-10">
            <button class="pt-1 pb-2 rounded-md px-3 bg-green-600 text-white hover:opacity-70 transition-all duration-300 ease-out">
              Actualizar
            </button>
            <button type="button" class="pt-1 pb-2 rounded-md px-3 bg-red-600 text-white hover:opacity-70 transition-all duration-300 ease-out">
              Cancelar
            </button>
          </div>
        </form>
  
      </section>
    {{-- End Content --}}

@endsection

@section('js')

@endsection
