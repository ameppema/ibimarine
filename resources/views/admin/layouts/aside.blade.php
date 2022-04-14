<aside class="px-4 bg-[#3c4045] min-w-44 w-1/4 lg:w-[15%]   py-10 ">
    <div class="logo mb-10 ">
      <a href="{{ route('admin') }}">
        <img src="{{asset('/img/logoibimarine_2.png')}}" alt="">
      </a>
    </div>
    <nav class="">
      <ul>
        <a class="block" href="{{route('admin')}}">
          <li class="flex text-white py-1 bg-blue-500 items-center cursor-pointer mb-6">
            <div class="ml-3"> <i class="fas fa-home icons"></i></div>
            <p class="ml-3">Inicio</p>
          </li>
        </a>

        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"> <i class="fa-solid fa-bars icons"></i></div>
          <p class="ml-3">Menu</p>
        </li>

        <a href="{{route('admin.rent')}}">
          <li class="flex text-white py-1 items-center cursor-pointer mb-6">
            <div class="ml-3"><i class="fa-solid fa-truck-ramp-box icons"></i></div>
            <p class="ml-3">Alquiler</p>
          </li>
        </a>

        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fa-solid fa-tags icons"></i></div>
          <p class="ml-3">Venta</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fa-solid fa-ship icons"></i></div>
          <p class="ml-3">Toys</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fa-solid fa-champagne-glasses icons"></i></div>
          <p class="ml-3">Eventos</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fas fa-newspaper icons"></i></div>
          <p class="ml-3">Noticias</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fas fa-envelope icons"></i></div>
          <p class="ml-3">Contacto</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fas fa-lock icons"></i></div>
          <p class="ml-3">Área privada</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fas fa-address-book icons"></i></div>
          <p class="ml-3">Usuarios</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fas fa-cog icons"></i></div>
          <p class="ml-3">Roles</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fas fa-tools icons"></i></div>
          <p class="ml-3">Permisos</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fa-solid fa-circle-user icons"></i></i></div>
          <p class="ml-3">Perfil</p>
        </li>
      </ul>
    </nav>
  </aside>