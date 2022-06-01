<x-app-layout>
  <!-- header -->
  @include('layouts.partial._header')

  <!-- main -->
  <section class="mt-10 w-[80%] mx-auto">
    <h1 class="text-2xl tab:text-3xl font-bold">
      チャットルーム一覧(全{{ $user->rooms->count() }}件)
    </h1>
    <div class="max-w-2xl mx-auto mt-5">
      <div class="p-4 max-w-md bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">ユーザー</h3>
        </div>
        <div class="flow-root">
          <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
            @foreach($user->rooms as $room)
            <a href="{{ url('/rooms/'.$room->id.'/chat') }}">
              <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                  <div class="flex-shrink-0">
                    @if (Storage::disk('local')->exists('storage/images/'.$user->image))
                    <img class="w-8 h-8 rounded-full" src="{{ asset('storage/images/'.$user->image) }}" alt="{{ $user->name }}" />
                    @else
                    <img class="w-8 h-8 rounded-full" src="{{ asset('images/user-image.jpg') }}" alt="{{ $user->name }}" />
                    @endif
                  </div>
                  <div class="flex-1 min-w-0">
                    <?php $partner = App\Models\User::getPartner($room->partner_id) ?>
                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                      {{ $partner->name }}
                    </p>
                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                      {{ $partner->email }}
                    </p>
                  </div>
                </div>
              </li>
            </a>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>
