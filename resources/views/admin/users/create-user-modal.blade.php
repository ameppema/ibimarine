<div data-target-modal="create-user-modal" id="create-user-modal" class="hidden fixed top-0 left-0 z-10  bg-black/50  h-screen w-full">

    <!-- Overlay content -->
    <div class="h-screen flex flex-col items-center">
  
        {{-- Overlay Body --}}
        <div class="w-[90%] text-old-black">
  
            <div id="inner-create-modal" class="mx-auto py-4 my-10 bg-white rounded">
                {{-- Head content --}}
                <div class="my-2 pb-2 border-b-2">
                    <div class="px-5 flex justify-between">
                        <div>
                            <p class="text-xl font-bold uppercase">Registrar Nuevo Usuario</p>
                        </div>
                        <div data-close-modal="create-user-modal" id="close_update_modal" class="-mt-5 cursor-pointer">
                            <span class="text-5xl text-old-gold">&times;</span>
                        </div>
                    </div>
                </div>
  
                {{-- Body Content --}}
                <div class="mt-5 px-5">
  
                    <form action="{{ route('admin.users.store') }}" method="POST">
                        @csrf
  
                        <div class="grid grid-cols-3 gap-4 max-w-full w-[1133px] items-center">  
                            <!-- Name -->
                          <div>
                            <div>
                                <label for="name">Nombre</label>
                            </div>
                            <input class="w-full"  type="text" name="name" id="name_create" placeholder="Nombre de usuario" value="{{old('name')}}">
                          </div>
                          
                            <!-- Nickname -->                          
                          <div>
                            <div class="flex">
                                <label for="name">Nickname</label>
                            </div>
                            <input class="w-full" type="text" name="nickname" id="nickname_create" placeholder="Nickname de usuario" value="{{old('nickname')}}">
                          </div>

                            <!-- Email --> 
                          <div>
                            <div>
                                <label for="name">Correo</label>
                            </div>
                            <input class="w-full" type="email" name="email" id="email_create" placeholder="Correo de usuario" value="{{old('email')}}">
                          </div>
                            <!-- Password --> 
                          <div>
                            <div>
                                <label for="name">Contraseña</label>
                            </div>
                            <input class="w-full" type="password" name="password" id="password_create" placeholder="*******">
                          </div>

                                <!-- Role -->                     
                          <div>
                            <div>
                                <label for="role">Role</label>
                            </div>
                            <select name="role" id="role_create">
                                <option value="null">-- Elegir un Rol --</option>
                                <option value="1" {{ old('role') === 1 ? 'selected' : ''}}>Administrador</option>
                                <option value="2" {{ old('role') === 2 ? 'selected' : ''}}>Empleado</option>
                                <option value="3" {{ old('role') === 3 ? 'selected' : ''}}>Broker</option>
                            </select>
                          </div>
                          
                                <!-- Status --> 
                          <div>
                            <div>
                                <label for="name">Satus</label>
                            </div>
                            <select name="status" id="status_create">
                                <option value="null">-- Seleccionar Status --</option>
                                <option value="1" {{ old('status') === 1 ? 'selected' : ''}}>Activo</option>
                                <option value="0" {{ old('status') === 2 ? 'selected' : ''}}>Inactivo</option>
                            </select>
                          </div>

  
                          </div>
                        <div class="w-full text-center mt-4">
                            <input class="btn mx-auto" type="submit" value="Registrar usuario">
                        </div>
                    </form>
  
                </div>
            </div>
  
        </div>
  
    </div>
  
  </div>