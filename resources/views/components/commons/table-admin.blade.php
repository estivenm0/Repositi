<div class="mx-4 mt-2">
    <div class=" {{$attributes['class']}} overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full">
          <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            @foreach ($cols as $col )
              <th class="px-4 py-3">{{$col}}</th>
            @endforeach 
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            {{$rows}}
          </tbody>
        </table>
      </div>
      <div class="px-4 py-3 text-xs font-semibold uppercase bg-gray-300 border-t dark:border-gray-700 ">
        <!-- Pagination -->
        {{$pagination}}
      </div>
    </div>
  </div>