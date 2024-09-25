<x-teacher-master>
    <x-member-breadcrumb></x-member-breadcrumb>
    <div class="px-4 flex mb-5 w-full flex-col">
        <div class="w-full text-xl font-medium border-zinc-300 pb-4">
            <i class="fa-solid fa-arrow-left pr-3"></i><a href="#" onclick="history.back()">返回</a>
        </div>
        <h3 class="w-full text-2xl font-medium border-b-2 border-zinc-300 pb-2">課程行事曆</h3>
    </div>
    <div class="px-4 flex flex-wrap">
        <div class=" w-full p-4 rounded-md space-y-4 border-2">
            <div id="calendar"></div>
        </div>
    </div>
</x-teacher-master>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
{{-- 內容頁 /teacher/admin/event --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            // initialView: 'dayGridMonth',
            timeZone:'Asia/Taipei',
            locale:'tw',
            headerToolbar: {
                start:'prev,next,today',
                center:'title',
                end: 'dayGridMonth,timeGridWeek,dayGridDay,list'
            },
            views: {
                dayGridMonth: { // name of view
                // titleFormat: { year: 'numeric', month: 'long', day: '2-digit' }
                // other view-specific options here
                }
            },
            events:[
                {
                    title:'塔羅',
                    start:'2024-09-30',
                    end:'2024-10-01'
                }
            ],
            selectable: true
        });
        calendar.render();
    });
</script>
