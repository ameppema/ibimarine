<div data-target-modal="update-brand-modal" id="update-brand-modal" class="hidden fixed top-0 left-0 z-10  bg-black/50  h-screen w-full">

    <!-- Overlay content -->
    <div class="h-screen flex flex-col items-center">
  
        {{-- Overlay Body --}}
        <div class="w-[90%] lg:max-w-xl text-old-black">
  
            <div id="inner-brand-modal" class="mx-auto py-4 my-10 bg-white rounded">
                {{-- Head content --}}
                <div class="my-2 pb-2 border-b-2">
                    <div class="px-5 flex justify-between">
                        <div>
                            <p class="text-xl font-bold uppercase">Actualizar Marca</p>
                        </div>
                        <div data-close-modal="update-brand-modal" id="close_edit_modal" class="-mt-5 cursor-pointer">
                            <span class="text-5xl text-old-gold">&times;</span>
                        </div>
                    </div>
                </div>
  
                {{-- Body Content --}}
                <div class="mt-5 px-5">
  
                    <form id="upload_image_form" action="{{ route('admin.brands.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')
   
                        <div class="w-full grid grid-cols-3 gap-1 items-center">
  
                            <div>
                                <div class="flex">
                                    <label for="name">Nombre de la Marca</label>
                                </div>
                                <input class="w-full"  type="text" name="name" id="name" placeholder="Marca..">
                            </div>
                          
                          
                            <div>
                                <div class="flex">
                                    <label for="name">Slug de la Marca</label>
                                </div>
                                <input class="w-full" type="text" name="slug" id="slug" placeholder="marca-slug">
                            </div>

                        
                            <div>
                                <label for="image">Nueva Imagen</label>
                                <input type="file" name="image" id="image" hidden>
                                <button class="w-1/3 btn-off" type="button" onclick="document.getElementById('image').click()"><i class="fa-solid fa-upload mr-1"></i>Subir imagen</button>
                            </div>
  
                            </div>
                        <input type="hidden" name="brand_id" id="brand_id" value="">
  
                        <div class="w-full text-center mt-4">
                            <input class="btn mx-auto" type="submit" value="Actualizar">
                        </div>
                    </form>
  
                </div>
            </div>
  
        </div>
  
    </div>
  
  </div>