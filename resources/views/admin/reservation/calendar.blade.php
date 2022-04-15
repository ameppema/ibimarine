@extends('layout.template')

@section('title', 'Contacto')

@section('pre-css')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

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

    <div class="container mb-20 lg:mx-auto lg:mt-10 lg:flex lg:flex-wrap lg:columns-2 lg:justify-center lg:w-4/5 ">

        <div>
    
            <div id="reservationCalendar">
                <div data-date-id="2022-05" class="hidden reservation-calendar w-80 mx-auto font-bold lg:text-2xl">
                    <!-- Calendar Head -->
                    <div class="flex lg:mb-2 justify-center text-old-black h-11 items-center rounded-t-xl text-xl">
                        <div style="width: 2rem" data-arrow-prev="" class="calendar-left-arrow cursor-pointer">
                            <svg data-arrow-prev="" class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path data-arrow-prev="" fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"></path>
                            </svg>
                        </div>
                          <div class="calendar__month_year font-bold mx-10 lg:text-3xl">
                            <span class="calendar__month text-capitalize">May</span>
                            <span class="calendar__year">2022</span>
                          </div>
                        <div style="width: 2rem; text-align: end;" data-arrow-next="" class="calendar-right-arrow cursor-pointer">
                            <svg data-arrow-next="" class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                                <path data-arrow-next="" fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- Calendar Body -->
                    <div class="reservation_calendar__days-container text-center text-old-black">
                        <ol class="calendar__days text-center grid grid-cols-7 pb-3 px-0 text-xl text-old-black">
                            <li class="day-name">M</li> 
                            <li class="day-name">T</li> 
                            <li class="day-name">W</li> 
                            <li class="day-name">T</li> 
                            <li class="day-name">F</li> 
                            <li class="day-name">S</li> 
                            <li class="day-name">S</li> 
                
                        </ol>
                        <ol class="calendar__days calendar__numberDay text-center grid gap-y-6 gap-x-1 grid-cols-7 grid-rows-6 pb-3 px-0 text-xl" style="grid-template-rows: repeat(6, 1fr);">
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="first-day month-day" style="--first-day-start: 7" data-day-id="2022-05-01">1</li>
                            <li class="month-day" data-day-id="2022-05-02">2</li>
                            <li class="month-day" data-day-id="2022-05-03">3</li>
                            <li class="month-day" data-day-id="2022-05-04">4</li>
                            <li class="month-day" data-day-id="2022-05-05">5</li>
                            <li class="month-day" data-day-id="2022-05-06">6</li>
                            <li class="month-day" data-day-id="2022-05-07">7</li>
                            <li class="month-day" data-day-id="2022-05-08">8</li>
                            <li class="month-day" data-day-id="2022-05-09">9</li>
                            <li class="month-day" data-day-id="2022-05-10">10</li>
                            <li class="month-day" data-day-id="2022-05-11">11</li>
                            <li class="month-day" data-day-id="2022-05-12">12</li>
                            <li class="month-day" data-day-id="2022-05-13">13</li>
                            <li class="month-day" data-day-id="2022-05-14">14</li>
                            <li class="month-day" data-day-id="2022-05-15">15</li>
                            <li class="month-day" data-day-id="2022-05-16">16</li>
                            <li class="month-day" data-day-id="2022-05-17">17</li>
                            <li class="month-day" data-day-id="2022-05-18">18</li>
                            <li class="month-day" data-day-id="2022-05-19">19</li>
                            <li class="month-day" data-day-id="2022-05-20">20</li>
                            <li class="month-day" data-day-id="2022-05-21">21</li>
                            <li class="month-day" data-day-id="2022-05-22">22</li>
                            <li class="month-day" data-day-id="2022-05-23">23</li>
                            <li class="month-day" data-day-id="2022-05-24">24</li>
                            <li class="month-day" data-day-id="2022-05-25">25</li>
                            <li class="month-day" data-day-id="2022-05-26">26</li>
                            <li class="month-day" data-day-id="2022-05-27">27</li>
                            <li class="month-day" data-day-id="2022-05-28">28</li>
                            <li class="month-day" data-day-id="2022-05-29">29</li>
                            <li class="month-day" data-day-id="2022-05-30">30</li>
                            <li class="month-day" data-day-id="2022-05-31">31</li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
                            <li class="month-day" data-day-id="2022-05-02"> </li>
    
    
                            
                        </ol>
                    </div>
                </div>
            </div>
    
            <div class="hidden">
                <input type="date" name="date_start" id="date_start">
                <input type="date" name="date_end" id="date_end">
            </div>
    
            <!-- buttons -->
            <div class="mx-auto mt-5 text-center flex justify-center gap-3">
                <div>
                    <a href="/reservation.html">
                        <input id="see_date" class="btn-off" type="submit" value="Ver">
                    </a>
                </div>
                <div>
                    <form id="request_reservation" method="GET" action="{{route('admin.reservation')}}">
                        @csrf
                        <input name="date_start" class="hidden" type="date">
                        <input name="date_end" class="hidden" type="date">
                        <input id="save_date" class="btn-off" type="submit" value="Reservar">
                    </form>
                </div>
            </div>
        </div>
    
       
        </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('js')
<script src="{{asset('vendor/axios.min.js')}}"></script>
<script src="/js/calenMod.js"></script>
<script src="/js/reservationCalendar.js"></script>
@endsection