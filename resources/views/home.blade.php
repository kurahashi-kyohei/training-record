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
        <div>
            <a href="/create" class="bg-red-600 text-white font-bold m-2  py-3 px-6 text-2xl border rounded">本日の筋トレを追加する</a>
        </div>
        <div>
            <a href="/history" class="bg-red-600 text-white font-bold m-2  py-3 px-6 text-2xl border rounded">履歴を見る</a>
        </div>
    </div>
</x-app-layout>
