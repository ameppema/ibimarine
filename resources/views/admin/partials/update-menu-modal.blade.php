<div data-target-modal="update-menu-modal" id="update-menu-modal" class="hidden fixed top-0 left-0 z-10  bg-black/50  h-screen w-full">

    <!-- Overlay content -->
    <div class="h-screen flex flex-col items-center">
  
        {{-- Overlay Body --}}
        <div class="w-[90%] lg:max-w-xl text-old-black">
  
            <div id="inner-menu-modal" class="mx-auto py-4 my-10 bg-white rounded">
                {{-- Head content --}}
                <div class="my-2 pb-2 border-b-2">
                    <div class="px-5 flex justify-between">
                        <div>
                            <p class="text-xl font-bold uppercase">Actualizar Menu</p>
                        </div>
                        <div data-close-modal="update-menu-modal" id="close_edit_modal" class="-mt-5 cursor-pointer">
                            <span class="text-5xl text-old-gold">&times;</span>
                        </div>
                    </div>
                </div>
  
                {{-- Body Content --}}
                <div class="mt-5 px-5">
  
                    <form id="upload_image_form" action="{{ route('admin.menu.update') }}" method="POST">
                        @csrf
  
                        <div class="flex w-full items-center gap-1 justify-between">
  
                          <div class="w-1/2">
                            <div class="flex">
                                <img src="{{asset('img/lang_es.png')}}" class="w-8 h-6 object-cover mr-1 mb-1" alt="Lang Es"> 
                                <label for="name">Enlace</label>
                            </div>
                            <input class="w-full"  type="text" name="name" id="name" placeholder="Nombre del Enlace">
                          </div>
                          
                          
                          <div class="w-1/2">
                            <div class="flex">
                                <img src="{{asset('img/lang_en.png')}}" class="w-8 h-6 object-cover mr-1 mb-1" alt="Lang En"> 
                                <label for="name">Link</label>
                            </div>
                            <input class="w-full" type="text" name="name_en" id="name_en" placeholder="Link Name">
                          </div>
  
                          </div>
                        <input type="hidden" name="menu_id" id="menu_id" value="">
  
                        <div class="w-full text-center mt-4">
                            <input class="btn mx-auto" type="submit" id="submit_new_menu" value="Actualizar">
                        </div>
                    </form>
  
                </div>
            </div>
  
        </div>
  
    </div>
  
  </div>