<x-app-layout>
  <div class="py-12 ml-12 flex flex-col items-start gap-4">
    <form class="flex flex-col items-start gap-2" method="post" action="{{route('create.store')}}">
      @csrf
      <div>
        <label for="event">種目</label>
        <select name="event" id="event">
          <option value="">種目を選択してください</option>
          <option value="ベンチプレス">ベンチプレス</option>
          <option value="スクワット">スクワット</option>
          <option value="デットリフト">デットリフト</option>
        </select>
      </div>
      <div class="flex gap-4 items-center">
        <label for="weight">重量</label>
        <input type="number" name="weight" id="weight">
      </div>
      <div class="flex gap-4 items-center">
        <label for="number">回数</label>
        <input type="number" name="number" id="number">
      </div>
      <div class="flex gap-4 items-center">
        <label for="set">セット数</label>
        <input type="number" name="set" id="set">
      </div>
      <button class="self-center mb-4 mt-8 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">登録</button>
    </form>

    {{-- <button type="button" class="text-white bg-red-600 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-1 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">＋</button> --}}
  </div>
</x-app-layout>