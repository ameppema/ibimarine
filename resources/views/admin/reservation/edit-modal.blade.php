{{-- Edit Modal --}}
<div data-target-modal="reservation_edit_modal" id="reservation_edit_modal" class="hidden fixed top-0 left-0 z-10  bg-old-black/50  h-screen w-full">

    <!-- Overlay content -->
    <div class="h-screen flex flex-col items-center">

        {{-- Overlay Body --}}
        <div class="w-[90%] lg:max-w-xl text-old-black">

            <div class="mx-auto py-4 my-10 bg-white rounded">
                {{-- Head content --}}
                <div class="my-2 pb-2 border-b-2">
                    <div class="px-5 flex justify-between">
                        <div>
                            <p class="text-xl font-bold uppercase">Editar Reservación</p>
                        </div>
                        <div data-close-modal="reservation_edit_modal" id="close_edit_modal" class="-mt-5 cursor-pointer">
                            <span class="text-5xl text-old-gold">&times;</span>
                        </div>
                    </div>
                </div>

                {{-- Body Content --}}
                <div class="mt-5 px-5">

                    <form id="form-edit-reservation" action="{{ route('admin.reservation.update') }}" method="POST">
                        @csrf
                        @method('post')
                        <!-- Input accordion -->
                        <div class="border border-old-black cursor-pointer">
                            <div class="hidden">
                                <select name="boat" id="boatE">
                                    @if ($boats)
                                    
                                        @foreach ($boats as $boat)

                                        <option value="{{ $boat->id }}">{{ $boat->name }}</option>
                                        
                                        @endforeach
                                    @endif
                                    <option value="null">Otro</option>
                                </select>
                            </div>
                            
                            <div data-target-accordion="boatE" class="px-2 py-1 flex items-center justify-items-start transition duration-300">
                                <div class="w-3 mr-3">
                                    <svg class="w-full h-auto inline" viewBox="40 0 492 190" width="161.967" height="490" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com">
                                        <polyline style="stroke: rgb(60, 64, 69); fill: rgb(60, 64, 69);" points="374.29 -152.505 374.29 337.21 184.29 91.571 373.97 -152.79" transform="matrix(0.000001, -1, 1, 0.000001, 193.789711, 374.289918)" bx:origin="0.525 0.496"></polyline>
                                    </svg>
                                </div>
                                <p id="boatTextContentE" class="h-auto w-full">
                                    Seleccionar nueva embarcación
                                </p>
                            </div>
                            <div class="max-h-0 overflow-hidden w-4/5 mx-auto text-center font-bold text-old-black transition-[max-height] duration-300">
    
                                @if ($boats)
                                    
                                    @foreach ($boats as $boat)
                                        
                                    <div onclick="setFormValue('form-edit-reservation', 'boatE', {{ $boat->id }}, 'boatTextContentE', this)" class="border-b border-b-old-black/50 last:border-b-0  py-2 mb-2">
                                        <p>{{ $boat->name }}</p>
                                    </div>
                                    
                                    @endforeach
                                @endif

    
                            </div>
    
                            <div>
    
                            </div>
                            
                        </div>
    
                        <!-- Input normal -->
                        <div class="my-4">
                            <label for="client"></label>
                            <input id="clientE" name="client" class="w-full" type="text" placeholder="Cliente">
                        </div>
                        <div class="my-4">
                            <label for="phone"></label>
                            <input id="phoneE" name="phone" class="w-full" type="text" placeholder="Telefono">
                        </div>
    
                        <!-- Input accordion -->
                        <div class="border border-old-black cursor-pointer">
                            <div class="hidden">
                                <select name="status" id="statusE">
                                    <option value="0">Stand By</option>
                                    <option value="1">Confirmed</option>
                                </select>
                            </div>
                            <!-- accordion head -->
                            <div data-target-accordion="statusE" class="px-2 py-1 flex items-center justify-items-start transition duration-300">
                                <div class="w-3 mr-3">
                                    <svg class="w-full h-auto inline" viewBox="40 0 492 190" width="161.967" height="490" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com">
                                        <polyline style="stroke: rgb(60, 64, 69); fill: rgb(60, 64, 69);" points="374.29 -152.505 374.29 337.21 184.29 91.571 373.97 -152.79" transform="matrix(0.000001, -1, 1, 0.000001, 193.789711, 374.289918)" bx:origin="0.525 0.496"></polyline>
                                    </svg>
                                </div>
                                <p class="h-auto w-full" id="statusTextContentE">
                                    Seleccionar nuevo status
                                </p>
                            </div>
                            <!-- accordion body -->
                            <div class="max-h-0 overflow-hidden w-4/5 mx-auto text-center font-bold text-old-black transition-[max-height] duration-300">
                                <div onclick="setFormValue('form-edit-reservation','statusE', 0, 'statusTextContentE', this)" class="flex gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                                    <div class="w-3">
                                        <svg class="text-[#ffba00]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle fill="currentcolor" cx="50" cy="50" r="50"/>
                                        </svg>
                                    </div>
                                    <p>Stand By</p>
                                </div>
                                <div onclick="setFormValue('form-edit-reservation','statusE', 1,'statusTextContentE', this)" class="flex gap-2 justify-center  py-2 mb-2">
                                    <div class="w-3 ">
                                        <svg class="text-[#0fd821]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                            <circle fill="currentcolor" cx="50" cy="50" r="50"/>
                                        </svg>
                                    </div>
                                    <p>Confirmada</p>
                                </div>
                            </div>
    
                            <div>
    
                            </div>
                            
                        </div>
    
                        <!-- Text Area -->
    
                        <div class="my-4">
                            <textarea class="w-full outline-[#aaa173]" name="observations" id="observationsE" placeholder="Observaciones:"></textarea>
                        </div>
    
                        {{-- Prefilled data --}}
                        <input class="hidden" type="text" name="last_updated_by" value="{{ auth()->user()->id }}">
                        <input class="hidden" type="text" id="reservation_id" name="reservation_id" value="">
    
                        <!-- Submit -->
                        <div class="my-4 text-center">
                            <input class="btn" type="submit" value="Guardar">
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

</div>