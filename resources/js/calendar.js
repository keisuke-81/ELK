import { Calendar } from "@fullcalendar/core";
import dayGridPlugin from "@fullcalendar/daygrid";

var calendarEl = document.getElementById("calendar");

let calendar = new Calendar(calendarEl, {
    plugins: [dayGridPlugin],
    initialView: "dayGridMonth",
    headerToolbar: {
        left: "prev,next today",
        center: "title",
        right: "",
         events: [
    {
      title  : 'event1',
      start  : '2023-01-01'
    },
    {
      title  : 'event2',
      start  : '2023-01-05',
      end    : '2023-01-07'
    },
    {
      title  : 'event3',
      start  : '2023-01-09T12:30:00',
      allDay : false // will make the time show
    }
  ]
    },

});
calendar.render();

