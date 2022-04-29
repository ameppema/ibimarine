<div data-target-modal="update-user-modal" id="update-user-modal" class="hidden fixed top-0 left-0 z-10  bg-black/50  h-screen w-full">

    <!-- Overlay content -->
    <div class="h-screen flex flex-col items-center">
  
        {{-- Overlay Body --}}
        <div class="w-[90%] text-old-black">
  
            <div id="inner-modal" class="mx-auto py-4 my-10 bg-white rounded">
                {{-- Head content --}}
                <div class="my-2 pb-2 border-b-2">
                    <div class="px-5 flex justify-between">
                        <div>
                            <p class="text-xl font-bold uppercase">Actualizar Usuario</p>
                        </div>
                        <div data-close-modal="update-user-modal" id="close_update_modal" class="-mt-5 cursor-pointer">
                            <span class="text-5xl text-old-gold">&times;</span>
                        </div>
                    </div>
                </div>
  
                {{-- Body Content --}}
                <div class="mt-5 px-5">
  
                    <form action="{{ route('admin.users.update') }}" method="POST">
                        @csrf @method('PUT')
  
                        <div class="flex w-full items-center gap-1 justify-between">
  
                          <div class="w-1/4">
                            <div class="flex">
                                <label for="name">Nombre</label>
                            </div>
                            <input class="w-full"  type="text" name="name" id="name" placeholder="Nombre de usuario">
                          </div>
                          
                          
                          <div class="w-1/4">
                            <div class="flex">
                                <label for="name">Nickname</label>
                            </div>
                            <input class="w-full" type="text" name="nickname" id="nickname" placeholder="Nickname de usuario">
                          </div>

                                                    
                          <div class="w-1/4">
                            <div class="flex">
                                <label for="role">Role</label>
                            </div>
                            <select name="role" id="role">
                                <option value="null">-- Elegir un Rol --</option>
                                <option value="1">Administrador</option>
                                <option value="2">Empleado</option>
                                <option value="3">Broker</option>
                            </select>
                          </div>
                          
                          
                          <div class="w-1/4">
                            <div class="flex">
                                <label for="name">Satus</label>
                            </div>
                            <select name="status" id="status">
                                <option value="null">-- Seleccionar Status --</option>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                          </div>

  
                          </div>
                          <input type="hidden" name="user_id" id="user_id">
                        <div class="w-full text-center mt-4">
                            <input class="btn mx-auto" type="submit" id="submit_new_menu" value="Actualizar">
                        </div>
                    </form>
  
                </div>
            </div>
  
        </div>
  
    </div>
  
  </div>