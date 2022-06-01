<nav class="relative w-[90%] mx-auto pc:w-full flex items-center justify-between py-4 text-gray-500 hover:text-gray-700 focus:text-gray-700">
  <div class="w-[40%] pc:w-[15%] container-fluid flex items-center justify-between pc:px-6">
    <a class="flex items-center text-gray-900 hover:text-gray-900 focus:text-gray-900 mt-2 lg:mt-0 mr-1" href="{{ url('/') }}">
      <x-application-header-logo class="w-full h-auto object-cover" />
    </a>
  </div>
  <ul class="hidden pc:flex justify-end pr-6">
    <li><a href="{{ url('/paiabroad') }}" class="inline-block mr-5">PAI ABROADとは</a></li>
    @auth
    <li><a href="{{ route('users.profile', ['user' => Auth::id()]) }}" class="inline-block mr-5">{{ Auth::user()->name }}さん</a></li>
    <li>
      <form action="{{ route('logout') }}" method="post" id="logout_form">
        @csrf
      </form>
      <a href="{{ route('logout') }}" id="logout_btn" class="inline-block" onclick="event.preventDefault(); logout();">ログアウト</a>
    </li>
    @else
    <li><a href="{{ route('register') }}" class="inline-block mr-5">新規登録</a></li>
    <li><a href="{{ route('login') }}" class="inline-block mr-5">ログイン</a></li>
    @endauth
  </ul>
  <div class="flex-grow pc:hidden">
    <img src="{{ asset('images/menu-icon.png') }}" alt="menu-icon" srcset="" class="ml-auto" style="width: 24px; height: 24px;">
  </div>
</nav>
