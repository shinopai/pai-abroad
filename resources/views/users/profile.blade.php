<x-app-layout>
  <!-- header -->
  @include('layouts.partial._header')

  <!-- main -->
  <div class="flex items-center w-[80%] mx-auto mt-10 justify-center">
    <div class="w-full text-center">
      <div class="bg-white shadow-lg rounded-lg py-3">
        <div class="photo-wrapper p-2">
          @if (Storage::disk('local')->exists('public/images/'.$user->image))
          <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('storage/images/'.$user->image) }}" alt="{{ $user->name }}" />
          @else
          <img class="w-32 h-32 rounded-full mx-auto" src="{{ asset('images/user-image.jpg') }}" alt="{{ $user->name }}" />
          @endif
        </div>
        <div class="p-2">
          <h3 class="text-center text-xl text-gray-900 font-medium leading-8">
            {{ $user->name }}
          </h3>
          <table class="w-[80%] mx-auto my-3">
            <tbody>
              <tr>
                <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                <td class="px-2 py-2">{{ $user->email }}</td>
              </tr>
              <tr>
                <td class="px-2 py-2 text-gray-500 font-semibold">登録留学先</td>
                <td class="px-2 py-2"><a href="{{ route('users.dests', ['user' => $user->id]) }}" class="hover:underline hover:text-blue-500">{{ $user->dests->count() }}</a></td>
              </tr>
              <tr>
                <td class="px-2 py-2 text-gray-500 font-semibold">チャットルーム</td>
                <td class="px-2 py-2"><a href="{{ route('users.rooms', ['user' => $user->id]) }}" class="hover:underline hover:text-blue-500">{{ $user->rooms->count() }}</a></td>
              </tr>
            </tbody>
          </table>

          <div class="text-center my-3">
            <a class="text-sm text-indigo-500 hover:underline hover:text-indigo-600 font-medium" href="{{ route('users.dests.create', ['user' => $user->id]) }}">留学先を登録</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
