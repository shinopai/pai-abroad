<x-app-layout>
  <!-- header -->
  <header>
    <div class="swiper">
      <div class="absolute w-[90%] right-0 left-0 mx-auto flex justify-between items-center z-10">
        <div class="w-[15%]">
          <a href="{{ url('/') }}">
            <x-application-logo class="w-full h-auto object-cover" />
          </a>
        </div>
        <div class="flex flex-grow justify-end gap-4">
          <a href="{{ url('/paiabroad') }}" class="inline-block mr-5">PAI ABROADとは</a>
          @guest
          <a href="{{ route('register') }}" class="inline-block mr-5">新規登録</a>
          <a href="{{ route('login') }}" class="inline-block">ログイン</a>
          @else
          <a href="{{ route('users.profile', ['user' => Auth::id()]) }}" class="inline-block mr-5">{{ Auth::user()->name }}さん</a>
          <form action="{{ route('logout') }}" method="post" id="logout_form">
            @csrf
          </form>
          <a href="{{ route('logout') }}" id="logout_btn" class="inline-block" onclick="event.preventDefault(); logout();">ログアウト</a>
          @endguest
        </div>
      </div>
      <div class="absolute right-0 left-0 mx-auto z-10 bottom-[15%] text-white text-center">
        <p class="text-4xl tab:text-5xl mb-8">
          グローバル時代の新しい留学
        </p>
        <h1 class="text-5xl tab:text-6xl font-bold mb-8">PAI<br>ABROAD</h1>
        <a href="" class="bg-transparent border-2 border-white rounded-md py-1 px-2 inline-block mr-2">さっそく留学先を探す</a>
        <a href="{{ url('/paiabroad') }}" class="text-my-red bg-transparent border-2 border-my-red rounded-md py-1 px-2 inline-block">PAI ABROADとは</a>
      </div>
      <div class="swiper-wrapper">
        <div id="header_slide_image1" class="swiper-slide"></div>
        <div id="header_slide_image2" class="swiper-slide"></div>
        <div id="header_slide_image3" class="swiper-slide"></div>
        <div id="header_slide_image4" class="swiper-slide"></div>
        <div id="header_slide_image5" class="swiper-slide"></div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-pagination"></div>
    </div>
  </header>

  <!-- flash message -->
  @if (session('flash'))
  <p class="bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3 text-center">{{ session('flash') }}</p>
  @endif

  <!-- main -->
  <div class="w-[80%] mx-auto max-w-[1200px]">
    <div class="container mx-auto flex justify-center items-center p-2 md:p-0">
      <div class="border w-[50%] mt-5 border-gray-300 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
        <p class="text-center">絞り込み検索</p>
        <form action="{{ route('home.search') }}" method="GET">
          <div class="flex justify-between gap-2">
            <div class="w-[30%]">
              <select name="price" class="w-full border p-2 rounded">
                <option value="">Price</option>
                <option value="1">~299</option>
                <option value="2">300~599</option>
                <option value="3">600~899</option>
                <option value="4">900~1199</option>
                <option value="5">1200~1499</option>
                <option value="6">1500~1799</option>
                <option value="7">1800~</option>
              </select>
            </div>
            <div class="w-[30%]">
              <select name="area" class="w-full border p-2 rounded">
                <option value="">Area</option>
                @foreach($areas as $index => $area)
                <option value="{{ $index + 1 }}">{{ $area }}</option>
                @endforeach
              </select>
            </div>
            <div class="w-[30%]">
              <select name="study" class="w-full border p-2 rounded">
                <option value="">Study</option> @foreach($studies as $index => $study)
                <option value="{{ $index + 1 }}">{{ $study }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <button type="submit" class="mt-5 p-2 border rounded-md bg-my-blue text-white w-full">Search</button>
        </form>
      </div>
    </div>

    <!-- study abroad destination list -->
    <section class="mt-10">
      <h1 class="text-2xl tab:text-3xl font-bold">
        ホームステイ留学先一覧
      </h1>

      <div class="w-full p-8">
        <div class="grid justify-center tab:grid-cols-2 pc:grid-cols-3 gap-5 lg:gap-7">
          <!-- Card 1 -->
          @forelse($dests as $dest)
          <a href="{{ route('users.dests.show', ['user' => $dest->user->id, 'dest' => $dest->id]) }}">
            <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden h-full">
              @if (Storage::disk('local')->exists('public/dests/' .$dest->user->id.'/'.$dest->image))
              <img class="h-56 w-full object-cover" src="{{ asset('storage/dests/'.$dest->user->id.'/'.$dest->image) }}" alt="{{ $dest->title }}" />
              @else
              <img class="h-56 w-full object-cover" src="{{ asset('images/user-image.jpg') }}" alt="{{ $dest->title }}" />
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
  </div>

  <!-- swiper -->
  <script src="{{ mix('js/swiper/swiper.js') }}"></script>

  <script>
    'use strict';

    let logoutBtn = document.getElementById('logout_btn');

    function logout(){
      logoutBtn.addEventListener('click', function(){
        document.getElementById('logout_form').submit();
      })
    }
  </script>
</x-app-layout>
