<x-app-layout>
  <div class="py-12 ml-12 flex flex-col items-start gap-4">
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form class="flex flex-col items-start gap-2" method="post" action="{{route('create.store')}}">
      @csrf
      <div class="flex  items-center gap-2">
        <div>
          <label for="event">種目</label>
          <select name="event" id="event">
            <option value="">種目を選択してください</option>
            <option value="ベンチプレス">ベンチプレス</option>
            <option value="スクワット">スクワット</option>
            <option value="デットリフト">デットリフト</option>
          </select>
        </div>
        @error('event')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <div class="flex  items-center gap-2">
        <div class="flex gap-4 items-center">
          <label for="weight">重量</label>
          <input type="number" name="weight" id="weight">
        </div>
        @error('weight')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <div class="flex  items-center gap-2">
        <div class="flex gap-4 items-center">
          <label for="number">回数</label>
          <input type="number" name="number" id="number">
        </div>
        @error('weight')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <div class="flex  items-center gap-2">
        <div class="flex gap-4 items-center">
          <label for="set">セット数</label>
          <input type="number" name="set" id="set">
        </div>
        @error('weight')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <button class="self-center mb-4 mt-8 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">登録</button>
    </form>
  </div>
</x-app-layout>