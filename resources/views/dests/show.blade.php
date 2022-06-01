<x-app-layout>
  <!-- header -->
  @include('layouts.partial._header')

  <!-- main -->
  <div class="flex justify-center mt-10 w-[80%] mx-auto my-5">
    <div class="w-full rounded-lg shadow-lg bg-white">
      @if (Storage::disk('local')->exists('public/dests/' .$dest->user->id.'/'.$dest->image))
      <img class="rounded-t-lg w-full h-auto object-cover" src="{{ asset('storage/dests/'.$dest->user->id.'/'.$dest->image) }}" alt="{{ $dest->title }}" />
      @else
      <img class="rounded-t-lg w-full h-auto object-cover" src="{{ asset('images/study-abroad.png') }}" alt="{{ $dest->title }}" />
      @endif
      <div class="p-6">
        <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $dest->title }}</h5>
        <p class="text-gray-700 text-base mb-4">
          {{ $dest->description }}
        </p>
        <div class="flex flex-col text-center mt-10">
          <h5 class="text-gray-900 text-xl font-medium mb-2">ホームステイ留学の詳細</h5>
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div>
                <table class="min-w-full">
                  <tbody>
                    <tr class="border-b">
                      <th class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">ホスト</th>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        @if (Storage::disk('local')->exists('public/images/'.$user->image))
                        <img class="w-24 h-24 rounded-full mx-auto" src="{{ asset('storage/images/'.$user->image) }}" alt="{{ $user->name }}" />
                        @else
                        <img class="w-24 h-24 rounded-full mx-auto" src="{{ asset('images/user-image.jpg') }}" alt="{{ $user->name }}" />
                        @endif
                        <p class="text-center mt-2">{{ $user->name }}</p>
                      </td>
                    </tr>
                    <tr class="border-b">
                      <th class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">エリア</th>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $dest->area->name }}
                      </td>
                    </tr>
                    <tr class="border-b">
                      <th class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">学習内容</th>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $dest->study->name }}
                      </td>
                    </tr>
                    <tr class="border-b">
                      <th class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">留学費用</th>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        &#36;{{ $dest->price }}
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        @auth
        @if(Auth::id() != $dest->user->id)
        <div id="chat_vue">
        </div>
        @endif
        @else
        <a href="{{ route('login') }}" class="text-center mt-5 w-full inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
          ログインしてチャットする
        </a>
        @endauth
      </div>
    </div>
  </div>
</x-app-layout>
<script>
  var userId = @json(Auth::id());
  var partnerId = @json($user->id);
</script>
