<x-app-layout>
  <!-- header -->
  @include('layouts.partial._header')

  <!-- main -->
  <section class="mt-10 w-[80%] mx-auto">
      <h1 class="text-2xl tab:text-3xl font-bold">
        ホームステイ留学先一覧(全{{ $user->dests->count() }}件)
      </h1>

      <div class="w-full p-4 pc:p-8">
        <div class="grid justify-center tab:grid-cols-2 pc:grid-cols-3 gap-5 lg:gap-7">
          <!-- Card 1 -->
          @forelse($user->dests as $dest)
          <a href="{{ route('users.dests.show', ['user' => $dest->user->id, 'dest' => $dest->id]) }}">
            <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden h-full">
              @if (Storage::disk('local')->exists('public/dests/' .$dest->user->id.'/'.$dest->image))
              <img class="h-56 w-full object-cover" src="{{ asset('storage/dests/'.$dest->user->id.'/'.$dest->image) }}" alt="{{ $dest->title }}" />
              @else
              <img class="h-56 w-full object-cover" src="{{ asset('images/study-abroad.png') }}" alt="{{ $dest->title }}" />
              @endif
              <div class="p-3">
                <div class="flex items-center gap-2 mb-2">
                  @if (Storage::disk('local')->exists('public/images/'.$dest->user->image))
                  <img src="{{ asset('storage/images/'.$dest->user->image) }}" alt="{{ $dest->user->name }}" srcset="" class="w-full h-auto object-cover rounded-full w-[50px] h-[50px]">
                  @else
                  <img src="{{ asset('images/'.$dest->user->image) }}" alt="{{ $dest->user->name }}" srcset="" class="w-full h-auto object-cover rounded-full w-[50px] h-[50px]">
                  @endif
                  <p>
                    {{ $dest->user->name }}
                  </p>
                </div>
                <span class="text-sm text-primary bg-[#C2E5D8] py-1 px-2 rounded-sm">{{ $dest->area->name }}</span>
                <span class="text-sm text-primary bg-[#F2D2AA] py-1 px-2 rounded-sm">&#36;{{ $dest->price }}</span>
                <span class="text-sm text-primary bg-[#D0E7AE] py-1 px-2 rounded-sm">{{ $dest->study->name }}</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                  {{ $dest->title }}
                </h3>
                <p class="paragraph-normal text-gray-600">
                  {{ $dest->description }}
                </p>
              </div>
            </div>
          </a>
          @empty
          <p>留学先はありません</p>
          @endforelse
        </div>
      </div>
    </section>
</x-app-layout>
