"use strict";

const form = document.getElementById('request_reservation_form');

const lowPrice = document.getElementById('low_season_price');
const highPrice = document.getElementById('high_season_price');
const seasonPriceInput = document.getElementById('season_price_input');


const MyYearCalendar = new UICustomeFullCalendar({
    year: 2022,
    target: document.getElementById('reservationCalendar'),
    onDayPicked: function(calendar){

        // Get Start/End dates to send request email
        const dateStart = calendar.getDates()[0];
        const dateEnd = calendar.getDates()[calendar.getDates().length - 1];

        const inputDateStart = document.createElement('input');
        inputDateStart.setAttribute('type', 'date');
        inputDateStart.setAttribute('name', 'start_date');
        inputDateStart.style.display = 'none';
        inputDateStart.value = dateStart.dateValue; 
        form.appendChild(inputDateStart);


        const inputDateEnd = document.createElement('input');
        inputDateEnd.setAttribute('type', 'date');
        inputDateEnd.setAttribute('name', 'end_date');
        inputDateEnd.style.display = 'none';
        inputDateEnd.value = dateEnd.dateValue; 
        form.appendChild(inputDateEnd);

        const firstPickedDay = UCalendar.parse(dateStart.dateValue);
        if(firstPickedDay.month == 6 || firstPickedDay.month == 7){            
            lowPrice.classList.add('bg-gray-1');
            highPrice.classList.remove('bg-gray-1');
            highPrice.classList.add('bg-old-gold');
            seasonPriceInput.value = 'High Season';
          } else if(firstPickedDay.month != 6 || firstPickedDay.month != 7){            
            highPrice.classList.add('bg-gray-1');
            lowPrice.classList.remove('bg-gray-1');
            lowPrice.classList.add('bg-old-gold');
            seasonPriceInput.value = 'Low Season';
          } else {
            highPrice.classList.add('bg-gray-1');
            highPrice.classList.remove('bg-old-gold');
            lowPrice.classList.add('bg-gray-1');
            lowPrice.classList.remove('bg-old-gold');
            seasonPriceInput.value = 'None Season Selected';
        }
    },
    onEmptyDates: function(){
      lowPrice.classList.add('bg-gray-1');
      highPrice.classList.add('bg-gray-1');
    }
});

MyYearCalendar.CustomeUI(function({monthName, monthId, year, HtmlMonthDays, HtmlWeekDays}) {
    return `
    <div data-month-id="${monthId}" class="max-w-xs w-4/5 mx-auto hidden ${UCalendar.getMonthCalendarInfo().monthId === monthId ? 'calendar-active': ''}">
    <div class="bg-old-gold flex justify-between text-white h-11 items-center rounded-t-xl text-xl">
      <div style="width: 2rem; text-align: center;" data-arrow-prev class="calendar-left-arrow cursor-pointer">
          <svg data-arrow-prev class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
              <path data-arrow-prev fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"></path>
          </svg>
      </div>
        <div class="calendar__month_year mx-10">
          <span class="calendar__month capitalize">${monthName}</span>
          <span class="calendar__year">${year}</span>
        </div>
      <div style="width: 2rem; text-align: center;" data-arrow-next class="calendar-right-arrow cursor-pointer">
          <svg data-arrow-next class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
              <path data-arrow-next fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path>
          </svg>
      </div>
    </div>
    <div class="calendar__days-container border-x-2 border-b-2 border-old-black/60 rounded-b-xl text-old-black">
        <ol class="calendar__days text-center grid grid-cols-7 pb-3 px-0 text-xl text-old-black">
            ${ HtmlWeekDays.join('') }
        </ol>
        <ol class="calendar__days calendar__numberDay text-center grid grid-cols-7 pb-3 px-0 text-xl">
          ${ HtmlMonthDays.join('')}
        </ol>
    </div>
</div>
    `;
})