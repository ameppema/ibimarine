@extends('admin.layouts.template')

@section('title', 'Home Admin')

@section('content')
    
    <section class="border block lg:w-[86%] w-3/4 bg-[#E6E6E6]">
      <h2 class="text-[#3c4045] font-bold text-3xl mt-5 pl-5">Página de inicio</h2>
      <div class=" max-w-2xl mx-auto mt-20 flex gap-6 justify-center flex-wrap">
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fas fa-home icons_color-primary"></i></div>
          <p class="text-xl">Inicio</p>
          <a href="{{route('admin')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fa-solid fa-bars icons icons_color-primary"></i></div>
          <p class="text-xl">Menu</p>
          <a href="{{route('admin.menu')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fa-solid fa-truck-ramp-box icons_color-primary"></i></div>
          <p class="text-xl">Alquiler</p>
          <a href="{{route('admin.rent')}}">
              <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fa-solid fa-tags icons_color-primary"></i></div>
          <p class="text-xl">Venta</p>
          <a href="{{route('admin.sale')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fa-solid fa-ship icons_color-primary"></i></div>
          <p class="text-xl">Toys</p>
          <a href="{{route('admin.toys')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fa-solid fa-champagne-glasses icons_color-primary"></i></div>
          <p class="text-xl">Eventos</p>
          <a href="{{route('admin.events')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fas fa-newspaper icons_color-primary"></i></div>
          <p class="text-xl">Noticias</p>
          <a href="{{route('admin.news')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fas fa-envelope icons_color-primary"></i></div>
          <p class="text-xl">Contacto</p>
          <a href="{{route('admin.contact')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fas fa-lock icons_color-primary"></i></div>
          <p class="text-xl">Área privada</p>
          <a href="{{route('admin.calendar')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fas fa-address-book icons_color-primary"></i></div>
          <p class="text-xl">Usuarios</p>
          <a href="{{route('admin.users')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fas fa-cog icons_color-primary"></i></div>
          <p class="text-xl">Roles</p>
          <a href="{{route('admin.roles')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
          class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
          <div class=""> <i class="fas fa-tools icons_color-primary"></i></div>
          <p class="text-xl">Permisos</p>
          <a href="{{route('admin.permissions')}}">
            <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
          </a>
        </article>
        <article
            class="w-36 h-36 bg-white gap-3 rounded-md border-[#3c4045] border flex flex-col items-center justify-center">
            <div class=""> <i class="fa-solid fa-circle-user icons_color-primary"></i></div>
            <p class="text-xl">Perfil</p>
            <a href="{{route('admin.profile')}}">
              <button class="bg-[#3c4045] pb-1 px-3 text-white">Entrar</button>
            </a>
        </article>
      </div>
    </section>
@endsection
