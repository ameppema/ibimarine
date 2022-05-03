const saveDatesBtn = document.getElementById('save_date');
const seeDatesBtn = document.getElementById('see_date');
const form = document.getElementById('request_reservation');
const formSee = document.getElementById('see_reservation');

saveDatesBtn.addEventListener('click', function(e){
    if(!form.date_end.value) {
        e.preventDefault();
        return ;
    }
});
seeDatesBtn.addEventListener('click', function(e){
    if(!formSee.date_end.value) {
        e.preventDefault();
        return ;
    }
});


const customeYearCalendar = new UICustomeFullCalendar({
    year: 2022,
    target: document.querySelector('#reservationCalendar'),
    onDayPicked: function(calendar){
        saveDatesBtn.classList.remove('btn-off');
        saveDatesBtn.classList.add('btn-on');

        if(calendar.getDates()[0].dateElement.classList.contains('bg-gray-1')){
            seeDatesBtn.classList.remove('btn-off');
            seeDatesBtn.classList.add('btn-on');

            formSee.date_start.value = calendar.getDates()[0].dateValue;
            formSee.date_end.value = calendar.getDates()[calendar.getDates().length - 1].dateValue;
        } else {
            seeDatesBtn.classList.remove('btn-on');
            seeDatesBtn.classList.add('btn-off');
            formSee.reset();

        }

        // Save date

        form.date_start.value = calendar.getDates()[0].dateValue;
        form.date_end.value = calendar.getDates()[calendar.getDates().length - 1].dateValue;
    },
    onEmptyDates: function(calendar){
            form.reset();
            formSee.reset();

            saveDatesBtn.classList.remove('btn-on');
            saveDatesBtn.classList.add('btn-off');

            seeDatesBtn.classList.remove('btn-on');
            seeDatesBtn.classList.add('btn-off');
    },
    onChangeMonth: function(calendar){
        console.log(UCalendar.getDayString());
        const Today = calendar.querySelector('[data-day-id="'+UCalendar.getDayString()+'"]')
        Today.style.color = '#aaa173';
        Today.style.border = '1px solid #aaa173';
        const {month, year} = UCalendar.stringToDateYM(calendar.getAttribute('data-date-id'));
        let date_start = UCalendar.getMonthCalendarInfo(year , month );
        axios.get(ROUTE, {
            params: {
                'date_start': calendar.getAttribute('data-date-id') + '-01',
                'date_end': calendar.getAttribute('data-date-id') + '-' +date_start.numberDaysInMonth,
            }
        })
            .then( function(response){

                if(!response.data) return null;                

                response.data.forEach(date => {
                    const datesBetween = UCalendar.parsePeriod(date.start_date, date.end_date);

                    datesBetween.forEach((UDate) => {
                        if(UDate.dateElement){
                            UDate.dateElement.classList.add('bg-gray-1');
                        }
                    });
                });


            })
            .catch(function(err){
                console.log(err);
            })
    }
});

customeYearCalendar.CustomeUI( function({monthName, monthId, year, HtmlMonthDays, HtmlWeekDays, fillDaysStart, fillDaysEnd}){
    return `
    <div data-date-id="${monthId}" class=" ${UCalendar.getMonthCalendarInfo().monthId === monthId ? 'calendar-active': ''} hidden reservation-calendar w-80 mx-auto font-bold">
    <!-- Calendar Head -->
    <div class="flex lg:mb-2 justify-center text-old-black h-11 items-center rounded-t-xl text-xl">
        <div style="width: 1rem" data-arrow-prev class="calendar-left-arrow cursor-pointer">
            <svg data-arrow-prev class="svg-inline--fa fa-chevron-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                <path data-arrow-prev fill="currentColor" d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"></path>
            </svg>
        </div>
          <div class="calendar__month_year font-bold mx-10 lg:text-2xl">
            <span class="calendar__month capitalize">${monthName}</span>
            <span class="calendar__year">${year}</span>
          </div>
        <div style="width: 1rem; text-align: end;" data-arrow-next class="calendar-right-arrow cursor-pointer">
            <svg data-arrow-next class="svg-inline--fa fa-chevron-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                <path data-arrow-next fill="currentColor" d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"></path>
            </svg>
        </div>
    </div>
    <!-- Calendar Body -->
    <div class="reservation_calendar__days-container text-center text-old-black">
        <ol class="calendar__days text-center grid grid-cols-7 pb-3 px-0 text-xl text-old-black">
            ${ HtmlWeekDays.join('') }
        </ol>
        <ol class="calendar__days calendar__numberDay text-center grid gap-y-6 gap-x-1 grid-cols-7 grid-rows-6 pb-3 px-0 text-xl">
            
            ${ fillDaysStart.join('') + HtmlMonthDays.join('') + fillDaysEnd.join('')}
        </ol>
    </div>
</div>
    `;
})