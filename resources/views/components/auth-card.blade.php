<div
  class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
>
  <div>
    {{ $logo }}
  </div>

  <div
    class="w-[80%] sm:max-w-md my-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
  >
    {{ $slot }}
  </div>
</div>
