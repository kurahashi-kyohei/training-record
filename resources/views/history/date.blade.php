<x-app-layout>
  <div class="max-w-2xl w-full overflow-auto">
    <form method="GET" action="{{route('history.show')}}" class="flex gap-4">
      <div class="flex gap-4 items-center">
        <input type="date" name="date" id="date" value="{{ $date }}">
      </div>
      <button class="self-center mb-4 mt-8 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">履歴を見る</button>
    </form>

    <table class="table-auto w-full text-left whitespace-no-wrap mt-12">
      <thead>
        <tr>
          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-bl">種目名</th>
          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">重量</th>
          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">回数</th>
          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">セット数</th>
          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"></th>
        </tr>
      </thead>
      @foreach ($values as $value)
      <tbody>
        <tr>
          <td class="border-b-2 border-gray-200 px-4 py-3">{{$value->event}}</td>
          <td class="border-b-2 border-gray-200 px-4 py-3">{{$value->weight}}</td>
          <td class="border-b-2 border-gray-200 px-4 py-3">{{$value->number}}</td>
          <td class="border-b-2 border-gray-200 px-4 py-3">{{$value->set}}</td>
          <td class="border-b-2 border-gray-200 px-4 py-3">
            <a href="{{ route('history.edit', ['id' => $value-> id]) }}" class="self-center text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 ">編集する</a>
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
    {{ $values->links()}}
  </div>
</x-app-layout>