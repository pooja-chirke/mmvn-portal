@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/events.css') }}">

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">

<div class="event-container">

    <h2 class="event-title">Events Calendar</h2>

    <!-- BUTTON -->
    <button class="event-btn" onclick="openModal()">+ Add Event</button>

    <!-- CALENDAR -->
    <div id="calendar"></div>

</div>

<!-- EVENT MODAL -->
<div id="eventModal" class="modal">
    <div class="modal-content">

        <span class="close" onclick="closeModal()">&times;</span>

        <h3>Add New Event</h3>

        <form onsubmit="return false;">
            <input type="text" id="eventTitle" placeholder="Event Title" required>
            <input type="date" id="eventDate" required>
            <input type="text" id="eventLocation" placeholder="Location" required>
            <textarea id="eventDesc" placeholder="Description"></textarea>

            <button type="button" class="event-btn" onclick="addEvent()">Save Event</button>
        </form>

    </div>
</div>

<!-- EVENT DETAILS MODAL -->
<div id="viewModal" class="modal">
    <div class="modal-content">

        <span class="close" onclick="closeView()">&times;</span>

        <h3 id="viewTitle"></h3>
        <p id="viewDate"></p>
        <p id="viewLocation"></p>
        <p id="viewDesc"></p>

    </div>
</div>

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    let calendarEl = document.getElementById('calendar');

    // SAFETY CHECK
    if (!calendarEl) return;

    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',

        events: [
            {
                title: 'Women Empowerment Workshop',
                start: '2025-12-10',
                extendedProps: {
                    location: 'Mumbai',
                    description: 'Skill development for women'
                }
            },
            {
                title: 'Health Camp',
                start: '2025-12-15',
                extendedProps: {
                    location: 'Pune',
                    description: 'Free health check-up'
                }
            }
        ],

        eventClick: function(info) {

            document.getElementById('viewTitle').innerText = info.event.title;
            document.getElementById('viewDate').innerText = "📅 " + info.event.start.toDateString();
            document.getElementById('viewLocation').innerText = "📍 " + (info.event.extendedProps.location || '');
            document.getElementById('viewDesc').innerText = info.event.extendedProps.description || '';

            document.getElementById('viewModal').style.display = "block";
        }
    });

    calendar.render();

    // ADD EVENT (SAFE)
    window.addEvent = function () {

        let title = document.getElementById('eventTitle').value.trim();
        let date = document.getElementById('eventDate').value;
        let location = document.getElementById('eventLocation').value.trim();
        let desc = document.getElementById('eventDesc').value.trim();

        if(title && date){

            calendar.addEvent({
                title: title,
                start: date,
                extendedProps: {
                    location: location,
                    description: desc
                }
            });

            // CLEAR FORM
            document.getElementById('eventTitle').value = '';
            document.getElementById('eventDate').value = '';
            document.getElementById('eventLocation').value = '';
            document.getElementById('eventDesc').value = '';

            closeModal();
        } else {
            alert("Please fill required fields");
        }
    }

});

// MODAL FUNCTIONS (SAFE)
function openModal() {
    let modal = document.getElementById('eventModal');
    if(modal) modal.style.display = "block";
}

function closeModal() {
    let modal = document.getElementById('eventModal');
    if(modal) modal.style.display = "none";
}

function closeView() {
    let modal = document.getElementById('viewModal');
    if(modal) modal.style.display = "none";
}
</script>

@endsection