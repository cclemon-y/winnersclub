<header>
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand" href="/"><img src="https://winnersmembers.com/wp-content/uploads/logo.png" class="siteTitle__img" alt="WINNERS CLUB members site" width="170" height="30"></a>
  <button  id ="nav-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">カレンダー</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">情報発信&集客</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">勉強会</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">成果報告</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">セミナー実績</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">特別講義</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">セミナー資料</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">zoomレクチャー</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">勉強会写真</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">規約</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/seminarFlow">求人募集</a> 
      </li>
      <!-- Authentication Links -->
      @guest
        <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('login') }}">{{ __('ログイン') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link text-light" href="{{ route('register') }}">{{ __('新規登録') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}さん<span class="caret"></span>
            </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        </li>
        @endguest
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</header>