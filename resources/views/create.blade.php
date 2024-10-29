<x-app-layout>
  @if (session('successMessage'))
    <div id="alert" class="alert text-center w-full mx-auto bg-green-400 absolute top-0 text-white py-2 opacity-80
">
      {{ session('successMessage') }}
    </div> 
  @endif

  <div class="py-12 ml-12 flex flex-col items-start gap-4">
    <form class="flex flex-col items-start gap-2" method="post" action="{{route('create.store')}}">
      @csrf
      <div class="flex  items-center gap-2">
        <div>
          <label for="event">種目</label>
          <select name="event" id="event">
            <option value="">種目を選択してください</option>
            <option value="ベンチプレス" @if( old('event') === 'ベンチプレス') selected @endif>ベンチプレス</option>
            <option value="スクワット" @if( old('event') === 'スクワット') selected @endif>スクワット</option>
            <option value="デットリフト" @if( old('event') === 'デットリフト') selected @endif>デットリフト</option>
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
          <input type="number" name="number" id="number" value="{{ old('number') }}">
        </div>
        @error('number')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <div class="flex  items-center gap-2">
        <div class="flex gap-4 items-center">
          <label for="set">セット数</label>
          <input type="number" name="set" id="set" value="{{ old('set') }}">
        </div>
        @error('set')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <button class="self-center mb-4 mt-8 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">登録</button>
    </form>
  </div>
</x-app-layout>

<script>
  setTimeout(function() {
    alert = document.getElementById('alert');
    alert.remove();
  }, 5000);
</script>