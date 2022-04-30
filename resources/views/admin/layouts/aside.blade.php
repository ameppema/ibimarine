<aside class="px-4 bg-[#3c4045] min-w-44 w-1/5 lg:w-[15%]   py-10 ">
    <div class="logo mb-10 ">
      <a href="{{ route('admin') }}">
        <img src="{{asset('/img/logoibimarine_2.png')}}" alt="">
      </a>
    </div>
    <nav class="">
      <ul>
        <a class="block" href="{{route('admin')}}">
          <li class="flex text-white py-1 {{ isRoute('admin') ? 'bg-[#037bff]' : ''}} items-center cursor-pointer mb-6">
            <div class="ml-3"> <i class="fas fa-home icons"></i></div>
            <p class="ml-3">Inicio</p>
          </li>
        </a>

        <a href="{{route('admin.menu')}}">
        <li class="{{ isRoute('admin.menu') ? 'bg-[#037bff]' : ''}}  flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"> <i class="fa-solid fa-bars icons"></i></div>
          <p class="ml-3">Menu</p>
        </li>
        </a>

        <a href="{{route('admin.rent')}}">
          <li class="{{ isRoute('admin.rent') }} flex text-white py-1 items-center cursor-pointer mb-6">
            <div class="ml-3"><i class="fa-solid fa-truck-ramp-box icons"></i></div>
            <p class="ml-3">Alquiler</p>
          </li>
        </a>

        <a href="{{route('admin.sale')}}">
          <li class="{{ isRoute('admin/sale/*') }} flex text-white py-1 items-center cursor-pointer mb-6">
            <div class="ml-3"><i class="fa-solid fa-tags icons"></i></div>
            <p class="ml-3">Venta</p>
          </li>
        </a>  
        <a href="{{route('admin.toys')}}">
        <li class="{{ isActive('admin.toys') }} flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fa-solid fa-ship icons"></i></div>
          <p class="ml-3">Toys</p>
        </li>
        </a>
        <a href="{{route('admin.events')}}">
        <li class="{{ isActive('admin.events') }} flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fa-solid fa-champagne-glasses icons"></i></div>
          <p class="ml-3">Eventos</p>
        </li>
        </a>
        <a href="{{route('admin.news')}}">
        <li class="{{ isActive('admin.news') }} flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fas fa-newspaper icons"></i></div>
          <p class="ml-3">Noticias</p>
        </li>
        </a>
        <a href="{{route('admin.contact')}}">
        <li class="{{ isActive('admin.contact') }} flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fas fa-envelope icons"></i></div>
          <p class="ml-3">Contacto</p>
        </li>
        </a>
        <a href="{{route('admin.calendar')}}">
        <li class="{{ isActive('admin.privarea') }} flex text-white py-1 items-center cursor-pointer mb-6">
            <div class="ml-3"><i class="fas fa-lock icons"></i></div>
            <p class="ml-3">Área privada</p>
          </li>
        </a>
        <a href="{{route('admin.users')}}">
        <li class="{{ isRoute('admin.users') }} flex text-white py-1 items-center cursor-pointer mb-6">
            <div class="ml-3"><i class="fas fa-address-book icons"></i></div>
            <p class="ml-3">Usuarios</p>
        </li>
        </a>
        <a href="{{route('admin.roles')}}">
          <li class="{{ isRoute('admin.roles') }} flex text-white py-1 items-center cursor-pointer mb-6">
            <div class="ml-3"><i class="fas fa-cog icons"></i></div>
            <p class="ml-3">Roles</p>
          </li>
        </a>
        <a href="{{route('admin.permissions')}}">
          <li class="{{ isActive('admin.permissions') }} flex text-white py-1 items-center cursor-pointer mb-6">
            <div class="ml-3"><i class="fas fa-tools icons"></i></div>
            <p class="ml-3">Permisos</p>
          </li>
        </a>
        <li class="{{ isActive('admin.profile') }}flex text-white py-1 items-center cursor-pointer mb-6">
          <div class="ml-3"><i class="fa-solid fa-circle-user icons"></i></div>
          <p class="ml-3">Perfil</p>
        </li>
        <li class="flex text-white py-1 items-center cursor-pointer mb-6">
          <form method="POST" action="{{route('logout')}}">
            <div class="ml-3"><i class="fa-solid fa-xmark-large"></i></div>
            @csrf
            <input class="ml-3" type="submit" value="Cerrar Session">
          </form>
        
        </li>
      </ul>
    </nav>
  </aside>