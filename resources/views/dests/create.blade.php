<x-app-layout>
  <!-- header -->
  @include('layouts.partial._header')

  <!-- main -->
  <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('users.dests.store', ['user' => $user->id]) }}" enctype="multipart/form-data" novalidate>
            @csrf

            <!-- title -->
            <div>
                <x-label for="title" :value="__('Title')" />

                <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
            </div>

            <!-- price -->
            <div class="mt-4">
                <x-label for="price" :value="__('Price')" />

                <x-input id="price" class="block mt-1 w-full" type="number" name="price" min="0" :value="old('price')" required />
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-label for="description" :value="__('Description')" />

                <x-textarea id="description" class="block mt-1 w-full" rows="5"
                                name="description"
                                required />
            </div>

            <!-- area and study-->
            <div class="pc:flex gap-2 mt-4">
              <div class="w-full pc:w-[15%]">
              <x-label for="area_id" :value="__('Area')" />
              <select id="area_id" name="area_id" class="border p-2 rounded block w-full">
                @foreach($areas as $index => $area)
                <option value="{{ $index + 1 }}">{{ $area }}</option>
                @endforeach
              </select>
              </div>
              <div class="w-full pc:w-[15%]">
              <x-label for="study_id" :value="__('Study')" />
              <select id="study_id" name="study_id" class="border p-2 rounded block w-full">
                  @foreach($studies as $index => $study)
                  <option value="{{ $index + 1 }}">{{ $study }}</option>
                  @endforeach
              </select>
              </div>
            </div>

            <!-- Image -->
            <div class="mt-4">
                <x-label for="image" :value="__('Image')" />

                <x-input id="image" class="block mt-1 w-full"
                                type="file"
                                name="image" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('登録する') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
