<x-app-layout>
  @if (session('successMessage'))
    <div id="alert" class="alert text-center w-full mx-auto bg-green-400 absolute top-0 text-white py-2 opacity-80
">
      {{ session('successMessage') }}
    </div> 
  @endif

  <a href="{{ route('create.index')}}" class="mb-4 text-black bg-white hover:bg-white focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 absolute top-10 left-72 border-black border-[1px]">戻る</a>

  <div class="py-12 ml-12 flex flex-col items-start gap-4">
    <form class="flex flex-col items-start gap-2" method="post" action="{{route('event.store')}}">
      @csrf
      <div class="flex  items-center gap-2">
        <div class="flex gap-2 items-center">
          <label for="name">種目</label>
          <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        @error('name')
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