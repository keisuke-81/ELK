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
          title  : '9',
          start  : '2022-10-01'
        },
        {
          title  : '2',
          start  : '2022-10-02'

            },
        {
          title  : '1',
          start  : '2022-10-03'
        },
        {
          title  : '',
          start  : '2022-10-04'

            },
        {
          title  : '1',
          start  : '2022-10-05'
        },
        {
          title  : '1',
          start  : '2022-10-06'

            },
        {
          title  : '',
          start  : '2022-10-07'
        },
        {
          title  : '1',
          start  : '2022-10-08'

            },
        {
          title  : '1',
          start  : '2022-10-09'
        },
        {
          title  : '1',
          start  : '2022-10-10'

            },
        {
          title  : '',
          start  : '2022-10-11'
        },
        {
          title  : '',
          start  : '2022-10-12'

            },
        {
          title  : '',
          start  : '2022-10-13'
        },
        {
          title  : '',
          start  : '2022-10-14'

            },
        {
          title  : '',
          start  : '2022-10-15'
        },
        {
          title  : '1',
          start  : '2022-10-16'

            },
        {
          title  : '',
          start  : '2022-10-17'
        },
        {
          title  : '',
          start  : '2022-10-18'

            },
        {
          title  : '',
          start  : '2022-10-19'
        },
        {
          title  : '1',
          start  : '2022-10-20'

            },
        {
          title  : '',
          start  : '2022-10-21'
        },
        {
          title  : '2',
          start  : '2022-10-22'

            },
        {
          title  : '2',
          start  : '2022-10-23'
        },
        {
          title  : '',
          start  : '2022-10-24'

            },
        {
          title  : '',
          start  : '2022-10-25'
        },
        {
          title  : '',
          start  : '2022-10-26'

            },
        {
          title  : '',
          start  : '2022-10-27'
        },
        {
          title  : '1',
          start  : '2022-10-28'

        },
        {
          title  : '',
          start  : '2022-10-29'
        },
        {
          title  : '2',
          start  : '2022-10-30'

            },
        {
          title  : '',
          start  : '2022-10-31'
        },


      ],
       color: 'white',     // an option!
       textColor: 'black' // an option!
    }

    // any other event sources...

  ]
});
calendar.render();

