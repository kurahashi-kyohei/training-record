<x-app-layout>
  @if (session('successMessage'))
    <div id="alert" class="alert text-center w-full mx-auto bg-green-400 absolute top-0 text-white py-2 opacity-80
">
      {{ session('successMessage') }}
    </div> 
  @endif

  <div class="flex flex-col items-start gap-4">
    <form class="flex flex-col mt-12 items-start content-center gap-2" method="post" action="{{ route('history.update', ['id' => $value->id]) }}">
      @csrf
      <div class="flex  items-center gap-2">
        <div>
          <label for="event">種目</label>
          <select name="event" id="event">
            <option value="">種目を選択してください</option>
            <option value="ベンチプレス" @if( $value->event === 'ベンチプレス') selected @endif>ベンチプレス</option>
            <option value="スクワット" @if( $value->event === 'スクワット') selected @endif>スクワット</option>
            <option value="デットリフト" @if( $value->event === 'デットリフト') selected @endif>デットリフト</option>
          </select>
        </div>
        @error('event')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <div class="flex  items-center gap-2">
        <div class="flex gap-4 items-center">
          <label for="weight">重量</label>
          <input type="number" name="weight" id="weight" value="{{ $value->weight }}">
        </div>
        @error('weight')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <div class="flex  items-center gap-2">
        <div class="flex gap-4 items-center">
          <label for="number">回数</label>
          <input type="number" name="number" id="number" value="{{ $value->weight }}">
        </div>
        @error('number')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <div class="flex  items-center gap-2">
        <div class="flex gap-4 items-center">
          <label for="set">セット数</label>
          <input type="number" name="set" id="set" value="{{ $value->weight }}">
        </div>
        @error('set')
          <div class=" text-red-600 text-sm">{{ $message }}</div>
        @enderror
      </div>

      <div class="flex gap-4">
        <button class="my-8 self-center text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">更新する</button>

        <button type="button" onClick="history.back()" class="my-8 self-center text-black bg-white hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 border-[1px] border-black">キャンセル</button>
      </div>
     
    </form>
  </div>
</x-app-layout>

<script>
  setTimeout(function() {
    alert = document.getElementById('alert');
    alert.remove();
  }, 5000);
</script>