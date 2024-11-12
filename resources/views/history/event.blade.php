<x-app-layout>
  <div class="max-w-xl w-full overflow-auto">
    <form method="GET" action="{{route('history.event')}}" class="flex gap-4">
      <div class="flex gap-4 items-center">
        <select name="event" id="event">
          <option value="">種目を選択してください</option>
          <option value="ベンチプレス" @if( $select === 'ベンチプレス') selected @endif>ベンチプレス</option>
          <option value="スクワット" @if( $select === 'スクワット') selected @endif>スクワット</option>
          <option value="デットリフト" @if( $select === 'デットリフト') selected @endif>デットリフト</option>
          @foreach ($events as $event)
            <option value="{{ $event->name }}" @if( $select === $event->name) selected @endif>{{ $event->name }}</option>
          @endforeach
        </select>
      </div>
      <button class="self-center mb-2 mt-2 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">履歴を見る</button>
    </form>

    <table class="table-auto w-full text-left whitespace-no-wrap mt-12">
      <thead>
        <tr>
          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-bl">種目名</th>
          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">重量</th>
          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">回数</th>
          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">セット数</th>
          <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
        </tr>
      </thead>
      @foreach ($values as $value)
      <tbody>
        <tr>
          <td class="border-b-2 border-gray-200 px-4 py-3">{{$value->event}}</td>
          <td class="border-b-2 border-gray-200 px-4 py-3">{{$value->weight}}</td>
          <td class="border-b-2 border-gray-200 px-4 py-3">{{$value->number}}</td>
          <td class="border-b-2 border-gray-200 px-4 py-3 text-lg text-gray-900">{{$value->set}}</td>
          <div></div>
        </tr>
      </tbody>
      @endforeach
    </table>
    {{ $values->links()}}
  </div>
</x-app-layout>