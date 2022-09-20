import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";

var calendarEl = document.getElementById("calendar");

let calendar = new Calendar(calendarEl, {
    dayCellContent: function(e) {
    e.dayNumberText = e.dayNumberText.replace('日', '');
    },
    locale:'ja',
    plugins: [dayGridPlugin],
    initialView: "dayGridMonth",
    headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "",
    },
     eventSources: [

    // your event source
    {
      events: [ // put the array in the `events` property
        {
          title  : '1',
          start  : '2023-01-01'
        },
        {
          title  : '2',
          start  : '2023-01-05'

        },
        {
          title  : '3',
          start  : '2023-01-09T12:30:00',
        },
        {
          title  : '5',
          start  : '2022-09-18'

            },
        {
          title  : '1',
          start  : '2022-09-25'

        },
      ],
      color: 'blue',     // an option!
      textColor: 'yellow' // an option!
    }

    // any other event sources...

  ]
});
calendar.render();

