@extends('layout.template')

@section('title', 'Reservaciones')

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

    @include('admin.reservation.feedback-overlay')


    {{-- Edit Modal --}}
    @include('admin.reservation.edit-modal')

    <div id="reservationContainer" class="container lg:pb-10 md:mx-auto lg:flex lg:flex-wrap lg:columns-2 lg:justify-center lg:w-4/5 lg:border-b-4 lg:border-b-old-gold">

        <!-- add reservation -->
        <div class="text-old-black lg:w-2/3">
            <!-- date -->
            <div class="text-center">
                <p class="font-bold text-2xl">
                    @if (isSameDate($date_start , $date_end))
                        {{ date_to_human_short($date_start) }}
                    @else
                        {{ date_to_human_short($date_start) }} {{ $date_end != null ? 'al ' . date_to_human_short($date_end) : ''}}
                    @endif
                </p>
            </div>

            <!-- add Reservation btn action -->
            <div id="addReservationBtn" class="@if ($ref == 'saveBtn') hidden @endif text-center mt-4">
                <button class="btn">Añadir reservación</button>
            </div>

            <!-- add Rerservation form  -->
            <div id="addReservationForm" class="{{ $ref == 'seeBtn' ? 'hidden' : '' }} w-4/5 mx-auto">
                <p class="text-center text-old-gold uppercase">Añadir reservacion</p>
                <form id="form-add-reservation" action="{{ route('admin.reservation.store') }}" method="POST">
                    @csrf
                    @method('post')
                    <!-- Input accordion -->
                    <div class="border border-old-black cursor-pointer  max-h-96 overflow-y-scroll">
                        <div class="hidden">
                            <select name="boat" id="boat">
                                @if ($boats)
                                    
                                    @foreach ($boats as $boat)
                                    
                                    <option value="{{ $boat->id }}">{{ $boat->name }}</option>
                                    
                                    @endforeach
                                @endif
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

                            @if ($boats)
                                
                                @foreach ($boats as $boat)
                                    
                                <div onclick="setFormValue('form-add-reservation', 'boat', {{ $boat->id }}, 'boatTextContent', this)" class="{{ $reservedBoats->contains($boat->id) ? 'disabled ' : ''}} border-b border-b-old-black/50 last:border-b-0 py-2 mb-2">
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
                            <div class="flex items-center" id="statusTextContent">
                                <p class="h-auto w-full">
                                    Status
                                </p>
                            </div>
                        </div>
                        <!-- accordion body -->
                        <div class="max-h-0 overflow-hidden w-4/5 mx-auto text-center font-bold text-old-black transition-[max-height] duration-300">
                            <div onclick="setFormValueStatus('form-add-reservation','status', 0, 'statusTextContent', this)" class="flex gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                                <div class="w-3">
                                    <svg class="text-[#ffba00]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                        <circle fill="currentcolor" cx="50" cy="50" r="50"/>
                                    </svg>
                                </div>
                                <p>Stand By</p>
                            </div>
                            <div onclick="setFormValueStatus('form-add-reservation','status', 1,'statusTextContent', this)" class="flex gap-2 justify-center py-2 mb-2">
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

                    {{-- Prefilled data --}}
                    <input class="hidden" type="text" name="made_by" value="{{ auth()->user()->id }}">
                    <input class="hidden" type="text" name="last_updated_by" value="{{ auth()->user()->id }}">
                    <input class="hidden" type="text" name="date_start" value="{{$date_start}}">
                    <input class="hidden" type="text" name="date_end" value="{{$date_end}}">

                    <!-- Submit -->
                    <div class="my-4 text-center">
                        <input class="btn" type="submit" value="Guardar">
                        <button type="button" class="btn-off" id="cancel-reservation-btn">Cancelar</button>
                    </div>

                </form>
                
            </div>


        </div>
        
        <!-- See Reservations -->
        <div class="w-4/5 lg:w-full lg:grid lg:grid-cols-2 lg:gap-x-2 xl:gap-x-10 mx-auto my-10">
    @if (count($reservations) > 0)
    
        @foreach ($reservations as $reservation)
            
            <!-- singular day reservation -->
            <div class="my-5 text-center">
                
                <p class="font-bold text-2xl">
                    @if (isSameDate($reservation->start_date , $reservation->end_date))
                    <!-- day -->
                    <div class="my-2">
                        <p class="font-bold text-xl text-old-black">Reserva {{ date_to_human_short($reservation->start_date) }}</p>
                    </div>
                    @else
                    {{-- multi day reservations --}}
                    <div class="my-2">
                        <p class="font-bold text-xl text-old-black">Reserva {{ date_to_human_short($reservation->start_date) }} {{ $reservation->end_date != null ? 'al ' . date_to_human_short($reservation->end_date) : ''}}</p>
                    </div>
                    @endif
                </p>

                <!-- reservation card -->
                <div class="border border-old-black rounded-lg" id="{{$reservation->id}}">
                    <!-- head card -->
                    <div data-target-accordion class="px-2 py-1 flex gap-2 justify-center items-center transition duration-300">

                        @if ($reservation->status === 0)

                        <div class="w-3">
                            <svg class="text-[#ffba00]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle fill="currentcolor" cx="50" cy="50" r="50"></circle>
                            </svg>
                        </div>
                            
                        @else
                            
                        <div class="w-3">
                            <svg class="text-[#0fd821]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <circle fill="currentcolor" cx="50" cy="50" r="50"/>
                            </svg>
                        </div>

                        @endif

                        <p class="boat_name">
                            {{ $reservation->boat_name }}
                        </p>
                        <div class="w-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z"/></svg>
                        </div>
                    </div>
                    <!-- body card -->
                    <div class="max-h-0 overflow-hidden w-4/5 mx-auto text-center font-bold text-old-black transition-[max-height] duration-300">
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Reservado</p>
                            @if (isSameDate($reservation->start_date , $reservation->end_date))
                            <!-- day -->
                            <p class="text-xl">{{ date_to_human_short($reservation->start_date) }}</p>
                            @else
                            {{-- multi day reservations --}}
                            <p class="text-xl">{{ date_to_human_short($reservation->start_date) }} {{ $reservation->end_date != null ? 'al ' . date_to_human_short($reservation->end_date) : ''}}</p>
                            @endif
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Reservado por</p>
                            <p class="text-xl">{{ $reservation->made_by_user}}</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Nombre del cliente</p>
                            <p class="text-xl">{{ $reservation->client_name }}</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Telefono</p>
                            <p class="text-xl">+{{$reservation->client_phone}}</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-center border-b border-b-old-black/50 py-2 mb-2">
                            <p class="text-sm">Obersvaciones</p>
                            <p class="text-xl">{{ $reservation->observations ?? 'Ninguna' }}</p>
                        </div>  
                        <div class="flex flex-col gap-2 justify-centerpy-2 mb-2">
                            <p class="text-sm">Ultima actualizacion por: <span>{{ $reservation->update_by_user }}</span> </p>
                            <p class="text-xl">{{ date_to_human($reservation->updated_at) }}</p> 
                        </div>
                        
                        <div class="flex gap-1 justify-center mb-4 mt-9">
                            <div> <button onclick="CaptureReservationData({{$reservation->id}})"> <a data-open-modal="reservation_edit_modal" class="btn-off py-2 px-3 inline">Editar</a> </button></div>
                            <div> <button> <a class="btn-off py-2 px-3" href="{{ route('admin.reservation.delete', ['reservation'=> $reservation->id]) }}">Eliminar</a></button></div>
                        </div>
                    </div>
                </div>

            </div>

        @endforeach     
        
        @endif
    </div>

    {{-- To Calendar Button --}}
    <div class="pb-10 mx-auto text-center">
        <a class="btn-gold" href="{{route('admin.calendar')}}">Volver al calendario</a>
    </div>
   
    </div>

@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('js')

<script>const ROUTE = "{{route('admin.reservation.getOneByAjax')}}";</script>
<script src="{{asset('/vendor/axios.min.js')}}"></script>
<script src="{{asset('/js/utils.js')}}"></script>

{{-- Edit Rerservation modal --}}
<script>
const modalEdit = document.getElementById('reservation_edit_modal');
function getElementById(ID){
    return document.getElementById(ID);
}

    function CaptureReservationData(ReservationId){
        axios.get(ROUTE+'/'+ ReservationId)
             .then(response => {
                 console.log(response)
                 getElementById('boatE').value = response.data.boat_id;
                 getElementById('boatTextContentE').textContent = getElementById('boatE').options[getElementById('boatE').selectedIndex].text;

                 getElementById('clientE').value = response.data.client_name;
                 getElementById('phoneE').value = response.data.client_phone;

                 getElementById('statusE').value = response.data.status;
                 getElementById('statusTextContentE').innerHTML = response.data.status == 0 
                                                                    ?  `                                
                                                                        <div class="w-3 mr-1">
                                                                            <svg class="text-[#ffba00]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle fill="currentcolor" cx="50" cy="50" r="50"/>
                                                                            </svg>
                                                                        </div>
                                                                        <p>Stand By</p>
                                                                        `
                                                                    : `
                                                                        <div class="w-3 mr-1">
                                                                            <svg class="text-[#0fd821]" style="width: 100%; height: auto; display: inline;" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                                                                <circle fill="currentcolor" cx="50" cy="50" r="50"/>
                                                                            </svg>
                                                                        </div>
                                                                        <p>Confirmada</p>
                                                                        `;

                 getElementById('boatE').value = response.data.boat_id;

                 getElementById('reservation_id').value = response.data.id;
                 getElementById('observationsE').textContent = response.data.observations;
             })
             .catch( err => console.log(err));
    }

    ToggleModal('reservation_edit_modal');
</script>

{{-- Form and Request Overlay Script --}}
<script>
    const addReservationBtn = document.getElementById('addReservationBtn');
    const addReservationForm = document.getElementById('addReservationForm');
    const cancelAddReservationBtn = document.getElementById('cancel-reservation-btn');

    addReservationBtn.addEventListener('click', function(){
        addReservationForm.style.display = 'block';
        addReservationBtn.style.display = 'none';
    })
    
    cancelAddReservationBtn.addEventListener('click', function(e){
        
        document.getElementById('form-add-reservation').reset()
        document.getElementById('boatTextContent').textContent = 'Embarcación';
        document.getElementById('statusTextContent').textContent = 'Status';
        document.getElementById('addReservationBtn').style.display = 'block';
        document.getElementById('addReservationForm').style.display = 'none';
        document.getElementById('reservation_overlay').style.display = 'none';
    });

    // Reservation overlay

    const closeReservationOverlay = document.getElementById('reservation_close');
    
    closeReservationOverlay.addEventListener('click', function(){
        document.getElementById('addReservationBtn').style.display = 'block';
        document.getElementById('addReservationForm').style.display = 'none';
        document.getElementById('reservation_overlay').style.display = 'none';
    })
</script>

<script>

    const form = document.getElementById('form-add-reservation');
    const status = document.querySelector('[data-target-accordion="status"]');
    const boat = document.querySelector('[data-target-accordion="boat"]');
        
</script>
@endsection