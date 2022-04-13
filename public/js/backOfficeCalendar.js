"use strict";

const MyYearCalendar = new UICustomeFullCalendar({
    year: 2022,
    target: document.getElementById('reservationCalendar'),
    onDayPicked: function(calendar){
        console.log(calendar.getDates())
    },
});

MyYearCalendar.CustomeUI(function({monthName, monthId, year, HtmlMonthDays, HtmlWeekDays}) {
    return `
    <div data-month-id="${monthId}" class="max-w-xs w-4/5 mx-auto hidden ${UCalendar.getMonthCalendarInfo().monthName === monthName ? 'calendar-active': ''}">
    <div class="bg-old-gold flex justify-center text-white h-11 items-center rounded-t-xl text-xl">
      <div style="width: 2rem; text-align: center;" data-arrow-prev class="calendar-left-arrow cursor-pointer"><svg class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"></path></svg></div>
        <div class="calendar__month_year mx-10">
          <span class="calendar__month text-capitalize">${monthName}</span>
          <span class="calendar__year">${year}</span>
        </div>
      <div style="width: 2rem; text-align: center;" data-arrow-next class="calendar-right-arrow cursor-pointer"><svg class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path></svg></div>
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