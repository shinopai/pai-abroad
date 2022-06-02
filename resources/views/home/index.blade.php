<x-app-layout>
  <!-- header -->
  <header>
    <div class="swiper">
      <div class="absolute w-[90%] right-0 left-0 mx-auto flex justify-between items-center z-10">
        <div class="w-[30%] tab:w-[15%]">
          <a href="{{ url('/') }}">
            <x-application-logo />
          </a>
        </div>
        <div class="hidden pc:flex flex-grow justify-end gap-4">
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
        <!-- hamburger_menu -->
        <div class="hamburger pc:hidden cursor-pointer text-center pc:hidden">
          <img src="{{ asset('images/menu-icon.png') }}" alt="menu-icon" srcset="" style="width: 24px; height: 24px;">
        </div>
      </div>
      <nav class="menu_sp fixed z-20 top-0 left-0 text-white bg-slate-300 bg-opacity-70 text-center w-full h-screen pt-5 opacity-0 transition-opacity duration-[2500ms] hidden">
        <ul class="w-[80%] mx-auto text-[18px] text-left">
          <li>
            <img src="{{ asset('images/close-icon.png') }}" alt="menu-icon" srcset="" class="ml-auto close_btn" style="width: 24px; height: 24px;">
          </li>
          <li><a href="{{ url('/paiabroad') }}" class="inline-block mr-5">PAI ABROADとは</a></li>
          @guest
          <li><a href="{{ route('register') }}" class="inline-block mr-5">新規登録</a></li>
          <li><a href="{{ route('login') }}" class="inline-block">ログイン</a></li>
          @else
          <li><a href="{{ route('users.profile', ['user' => Auth::id()]) }}" class="inline-block mr-5">{{ Auth::user()->name }}さん</a></li>
          <li>
            <form action="{{ route('logout') }}" method="post" id="logout_form">
              @csrf
            </form>
            <a href="{{ route('logout') }}" id="logout_btn" class="inline-block" onclick="event.preventDefault(); logout();">ログアウト</a>
          </li>
          @endguest
        </ul>
      </nav>


      <div class="absolute right-0 left-0 mx-auto z-10 bottom-[30%] tab:bottom-[15%] text-white text-center">
        <p class="text-4xl tab:text-5xl mb-8">
          グローバル時代の<br class="tab:hidden">新しい留学
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
  <div class="w-[90%] pc:w-[80%] mx-auto max-w-[1200px]">
    <div class="container mx-auto flex justify-center items-center p-2 md:p-0">
      <div class="border w-full pc:w-[50%] mt-5 border-gray-300 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
        <p class="text-center">絞り込み検索</p>
        <form action="{{ route('home.search') }}" method="GET">
          <div class="block pc:flex justify-between gap-2">
            <div class="w-full pc:w-[30%]">
              <select name="price" class="w-full border p-2 rounded mb-2 pc:mb-0">
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
            <div class="w-full pc:w-[30%]">
              <select name="area" class="w-full border p-2 rounded mb-2 pc:mb-0">
                <option value="">Area</option>
                @foreach($areas as $index => $area)
                <option value="{{ $index + 1 }}">{{ $area }}</option>
                @endforeach
              </select>
            </div>
            <div class="w-full pc:w-[30%]">
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
        ホームステイ留学先一覧(全{{ $dests->total() }}件)
      </h1>

      <div class="w-full p-4 pc:p-8">
        <div class="grid justify-center tab:grid-cols-2 pc:grid-cols-3 gap-5 lg:gap-7">
          <!-- Card 1 -->
          @forelse($dests as $dest)
          <a href="{{ route('users.dests.show', ['user' => $dest->user->id, 'dest' => $dest->id]) }}">
            <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden h-full">
              @if (App\Models\Dest::isExistsDestImage('public/dests/' .$dest->user->id.'/'.$dest->image))
              <img class="h-56 w-full object-cover" src="{{ asset('storage/dests/'.$dest->user->id.'/'.$dest->image) }}" alt="{{ $dest->title }}" />
              @else
              <img class="h-56 w-full object-cover" src="{{ asset('images/study-abroad.png') }}" alt="{{ $dest->title }}" />
              @endif
              <div class="p-3">
                <div class="flex items-center gap-2 mb-2">
                  @if (App\Models\User::isExistsUserImage('public/images/'.$dest->user->image))
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
      {{ $dests->links() }}
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
