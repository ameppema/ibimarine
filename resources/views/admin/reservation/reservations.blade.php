@extends('layout.template')

@section('title', 'Contacto')

@section('hero')
    <!-- Section Hero - Title -->
    <section class="my-5">
        <div class="border-y-4 border-old-gold py-2  lg:px-16 lg:mx-auto lg:w-max">
           <p class="text-center text-old-black text-2xl uppercase font-bold">Calendario 2022</p>
        </div>
    </section>
@endsection

@section('content')
    <!-- Section Page content -->

    <!-- Overlay Reservation -->
    <div id="reservation_overlay" class="hidden fixed top-0 left-0 z-10  bg-old-black/95  h-screen w-full">

        <!-- Overlay content -->
        <div class="h-screen flex flex-col items-center text-center">
            <div>
                <div class="w-56 mt-40 mx-auto">
                    <img src="{{asset('/img/logoibimarine_2.png')}}" alt="Logo Ibimarine">
                </div>
            </div>

            <div class="text-white text-center">
                <div class="w-4/5 mx-auto my-10">
                    <p class="font-bold text-2xl lg:text-3xl my-5 lg:my-8">Reserva Creada!</p>
                    <p class="text-xl lg:text-3xl lg:w-[50%] mx-auto">
                        Puedes comprobar que tu reserva ha sido creada en el calendario.
                    </p>
                </div>

            </div>

            <div>
                <button id="reservation_close" class="btn-gold">Cerrar</button>
            </div>
        </div>

    </div>

    <div id="reservationContainer" class="container lg:pb-10 lg:mx-auto lg:flex lg:flex-wrap lg:columns-2 lg:justify-center lg:w-4/5 lg:border-b-4 lg:border-b-old-gold">

        <!-- add reservation -->
        <div class="text-old-black lg:w-2/3">
            <!-- date -->
            <div class="text-center">
                <p class="font-bold text-2xl">7 de mayo</p>
            </div>

            <!-- add Reservation btn action -->
            <div id="addReservationBtn" class="text-center mt-4">
                <button class="btn">Añadir reservación</button>
            </div>

            <!-- add Rerservation form  -->
            <div id="addReservationForm" class="hidden w-4/5 mx-auto">
                <p class="text-center text-old-gold uppercase">Añadir reservacion</p>
                <form id="form-add-reservation" action="#">

                    <!-- Input accordion -->
                    <div class="border border-old-black cursor-pointer">
                        <div class="hidden">
                            <select name="boat" id="boat">
                                <option value="0">Van Dautch 40</option>
                                <option value="1">Sessa Marine c44</option>
                                <option value="2">Predator 82</option>
                                <option value="3">Pardo 43</option>
                                <option value="4">Astromar</option>
                                <option value="5">Sessa 52</option>
                                <option value="null">Otro</option>
                            </select>
                        </div>
                        <!-- Arrow Down -->
                        <div data-target-accordion="boat" class="px-2 py-1 flex items-center justify-items-start transition duration-300">
                            <div class="w-3 mr-3">
                                <svg class="w-full h-auto inline" viewBox="40 0 492 190" width="161.967" height="490" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com">
                                    <polyline style="stroke: rgb(60, 64, 69); fill: rgb(60, 64, 69);" points="374.29 -152.505 374.29 337.21 184.29 91.571 373.97 -152.79" transform="matrix(0.000001, -1, 1, 0.000001, 193.789711, 374.289918)" bx:origin="0.525 0.496"></polyline>
                                </svg>
                            </div>
                            <p id="boatTextContent" class="h-auto w-full">
                                Embarcación
                            </p>
                        </div>
                        <div class="max-h-0 overflow-hidden w-4/5 mx-auto text-center font-bold text-old-black transition-[max-height] duration-300">
                            <div onclick="setFormValue('form-add-reservation', 'boat', 0, 'boatTextContent', this)" class="border-b border-b-old-black/50 py-2 mb-2">
                                <p>Van Dautch 40</p>
                            </div>
                            <div onclick="setFormValue('form-add-reservation', 'boat', 1, 'boatTextContent', this)" class="border-b border-b-old-black/50 py-2 mb-2">
                                <p>Sessa Marine c44</p>
                            </div>
                            <div onclick="setFormValue('form-add-reservation', 'boat', 2, 'boatTextContent', this)" class="border-b border-b-old-black/50 py-2 mb-2">
                                <p>Predator 82</p>
                            </div>
                            <div onclick="setFormValue('form-add-reservation', 'boat', 3, 'boatTextContent', this)" class="border-b border-b-old-black/50 py-2 mb-2">
                                <p>Pardo 43</p>
                            </div>
                            <div onclick="setFormValue('form-add-reservation', 'boat', 4, 'boatTextContent', this)" class="disabled border-b border-b-old-black/50 py-2 mb-2">
                                <p>Astromar</p>
                            </div>
                            <div onclick="setFormValue('form-add-reservation', 'boat', 5, 'boatTextContent', this)" class="border-b border-b-old-black/50 py-2 mb-2">
                                <p>Sessa 52</p>
                            </div>
                            <div onclick="setFormValue('form-add-reservation', 'boat', null, 'boatTextConte, thisnt')" class="border-b border-b-old-black/50 py-2 mb-2">
                                <p>OTRO</p>
                            </div>
                        </div>

                        <div>

                        </div>
                        
                    </div>

                    <!-- Input normal -->
                    <div class="my-4">
                        <label for="client"></label>
                        <input id="client" name="client" class="w-full" type="text" placeholder="Cliente">
                    </div>
                    <div class="my-4">
                        <label for="phone"></label>
                        <input id="phone" name="phone" class="w-full" type="text" placeholder="Telefono">
                    </div>

                    <!-- Input accordion -->
                    <div class="border border-old-black cursor-pointer">
                        <div class="hidden">
                            <select name="status" id="status">
                                <option value="0">Stand By</option>
                                <option value="1">Confirmed</option>
                            </select>
                        </div>
                        <!-- accordion head -->
                        <div data-target-accordion="status" class="px-2 py-1 flex items-center justify-items-start transition duration-300">
                            <div class="w-3 mr-3">
                                <svg class="w-full h-auto inline" viewBox="40 0 492 190" width="161.967" height="490" xmlns="http://www.w3.org/2000/svg" xmlns:bx="https://boxy-svg.com">
                                    <polyline style="stroke: rgb(60, 64, 69); fill: rgb(60, 64, 69);" points="374.29 -152.505 374.29 337.21 184.29 91.571 373.97 -152.79" transform="matrix(0.000001, -1, 1, 0.000001, 193.789711, 374.289918)" bx:origin="0.525 0.496"></polyline>
                                </svg>
                            </div>
                            <p class="h-auto w-full" id="statusTextContent">
                                Status
                            </p>
                        </div>
                        <!-- accordion body -->
                        <div class="max-h-0 overflow-hidden w-4/5 mx-auto text-center font-bold text-old-black transition-[max-height] duration-300">
                            <div onclick="setFormValue('form-add-reservation','status', 0, 'statusTextContent', this)" class="flex gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                                <div class="w-3">
                                    <svg class="text-[#ffba00]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <circle fill="currentcolor" cx="50" cy="50" r="50"/>
                                    </svg>
                                </div>
                                <p>Stand By</p>
                            </div>
                            <div onclick="setFormValue('form-add-reservation','status', 1,'statusTextContent', this)" class="flex gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
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
                        <textarea class="w-full outline-[#aaa173]" name="observations" id="observations" placeholder="Observaciones:"></textarea>
                    </div>

                    <!-- Submit -->
                    <div class="my-4 text-center">
                        <input class="btn" type="submit" value="Guardar">
                    </div>
                </form>
                
            </div>


        </div>

        <!-- See Reservations -->
        <div class="w-4/5 mx-auto lg:gap-6 lg:flex lg:justify-center my-10">
            <!-- singular day reservation -->
            <div class="w-full my-5 text-center">
                <!-- day -->
                <div class="my-2">
                    <p class="font-bold text-xl text-old-black">Reservas del 7 de mayo</p>
                </div>

                <!-- reservation card -->
                <div class="border border-old-black rounded-lg">
                    <!-- head card -->
                    <div data-target-accordion class="px-2 py-1 flex gap-2 justify-center items-center transition duration-300">
                        <div class="w-3">
                            <svg class="text-[#0fd821]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle fill="currentcolor" cx="50" cy="50" r="50"/>
                            </svg>
                        </div>
                        <p class="" id="statusTextContent">
                            Van Ducht 40
                        </p>
                    </div>
                    <!-- body card -->
                    <div class="max-h-0 overflow-hidden w-4/5 mx-auto text-center font-bold text-old-black transition-[max-height] duration-300">
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Reservado</p>
                            <p class="text-xl">7 de mayo del 2022</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Reservado por</p>
                            <p class="text-xl">Stand By</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Nombre del cliente</p>
                            <p class="text-xl">ana bonet</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Telefono</p>
                            <p class="text-xl">+34 678 763 402</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Obersvaciones</p>
                            <p class="text-xl">Pagada 50%, llevar refrescos, llamar al capitan</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Ultima actualizacion por: <span>Jhon Doe.</span> </p>
                            <p class="text-xl">Viernes 7 de abril 2022</p>
                        </div>
                        
                        <div class="flex gap-1 justify-center my-4">
                            <div><a class="btn-off py-2 px-3" href="#">Editar</a></div>
                            <div><a class="btn-off py-2 px-3" href="#">Eliminar</a></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- singular day reservation -->
            <div class="w-full my-5 text-center">
                <!-- day -->
                <div class="my-2">
                    <p class="font-bold text-xl text-old-black">Reservas del 8 de mayo</p>
                </div>

                <!-- reservation card -->
                <div class="border border-old-black rounded-lg">
                    <!-- head card -->
                    <div data-target-accordion class="px-2 py-1 flex gap-2 justify-center items-center transition duration-300">
                        <div class="w-3">
                            <svg class="text-[#0fd821]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle fill="currentcolor" cx="50" cy="50" r="50"/>
                            </svg>
                        </div>
                        <p class="" id="statusTextContent">
                            Van Ducht 40
                        </p>
                        <div class="w-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z"/></svg>
                        </div>
                    </div>
                    <!-- body card -->
                    <div class="max-h-0 overflow-hidden w-4/5 mx-auto text-center font-bold text-old-black transition-[max-height] duration-300">
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Reservado</p>
                            <p class="text-xl">8 de mayo del 2022</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Reservado por</p>
                            <p class="text-xl">Stand By</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Nombre del cliente</p>
                            <p class="text-xl">ana bonet</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Telefono</p>
                            <p class="text-xl">+34 678 763 402</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Obersvaciones</p>
                            <p class="text-xl">Pagada 50%, llevar refrescos, llamar al capitan</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Ultima actualizacion por: <span>Jhon Doe.</span> </p>
                            <p class="text-xl">Viernes 7 de abril 2022</p>
                        </div>
                        
                        <div class="flex gap-1 justify-center my-4">
                            <div><a class="btn-off py-2 px-3" href="#">Editar</a></div>
                            <div><a class="btn-off py-2 px-3" href="#">Eliminar</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
   
    </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('js')
<script>
    const addReservationBtn = document.getElementById('addReservationBtn');
    const addReservationForm = document.getElementById('addReservationForm');

    addReservationBtn.addEventListener('click', function(){
        addReservationForm.style.display = 'block';
        addReservationBtn.style.display = 'none';
    })

    // Reservation overlay

    const closeReservationOverlay = document.getElementById('reservation_close');
    
    closeReservationOverlay.addEventListener('click', function(){
        document.getElementById('addReservationBtn').style.display = 'block';
        document.getElementById('addReservationForm').style.display = 'none';
        document.getElementById('reservation_overlay').style.display = 'none';
    })
</script>

<script>
    const accordions = document.querySelectorAll('[data-target-accordion]');

    for(let i = 0; i < accordions.length; i++){
        accordions[i].addEventListener('click', function(e){
            const accordionBody = accordions[i].nextElementSibling;

            const accordion = accordionBody.style.maxHeight
                        ? accordionBody.style.maxHeight = null
                        : accordionBody.style.maxHeight = accordionBody.scrollHeight + 'px';
        
    })
}
</script>

<script>

    function setFormValue(formId, targetInput, value, targetLabel, instance){
        const form = document.getElementById(formId);
        const input  = document.querySelector('[data-target-accordion="'+targetInput+'"]');
        if(instance.classList.contains('disabled')) return null;
        input.nextElementSibling.style.maxHeight = null;
        if(form){
            form[targetInput].value = value;
        }
        if(targetLabel){
            if(form[targetInput].options){
                document.getElementById(targetLabel).textContent = form[targetInput].options[form[targetInput].selectedIndex].text;
                return true;
            }
            document.getElementById(targetLabel).textContent = form[targetInput].value;
        }
        return false;
    }
    const form = document.getElementById('form-add-reservation');
    const status = document.querySelector('[data-target-accordion="status"]');
    const boat = document.querySelector('[data-target-accordion="boat"]');
        
    form.addEventListener('submit', function(e){
        e.preventDefault();
        document.getElementById('reservation_overlay').style.display = 'block';
        const statusValue = status.parentElement.querySelector('[name="status"]').value;
        const boatValue = boat.parentElement.querySelector('[name="boat"]').value;


        const clientName = this.client.value;
        const clientPhone = this.phone.value;
        const employObservation = this.observations.value;
    })
</script>
@endsection