<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/locales/ja.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'ja',
            initialView: 'dayGridMonth', // 月表示のカレンダー
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            events: [
                // ここにイベントを追加できます
            ],
            aspectRatio: 1.5, 
            editable: true, // イベントのドラッグやリサイズを許可
            droppable: true, // ドラッグアンドドロップを有効に
            eventColor: '#38bdf8', // イベントのデフォルトの色
            eventTextColor: '#ffffff', // イベントテキストの色
        });

        calendar.render();
    });
</script>

<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> -->

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> -->
    

    <div class="py-12 flex flex-col items-center gap-6 ">
        <!-- <div id='calendar' class="max-w-2xl mx-auto w-full"></div> -->

        <div>
            <a href="/create" class="bg-red-600 text-white font-bold m-2  py-3 px-6 text-2xl border rounded">本日の筋トレを追加する</a>
        </div>
        <div>
            <a href="/history" class="bg-red-600 text-white font-bold m-2  py-3 px-6 text-2xl border rounded">履歴を見る</a>
        </div>
    </div>
</x-app-layout>
