<header>
    <div class="logo"><a href="{{ route('main') }}"><strong>LOGOTIP</strong></a></div>
    <div class="search-field">
        <form action="/" method="GET" class="search-form">
            <input type="text" name="s" placeholder="">
            <button type="submit"><img src="{{ asset('img/search.png') }}"></button>
        </form>
    </div>

    <div class="log-in">
        @auth('web')
            <a href="{{ route('logout') }}"><img src="{{ asset('img/log-out.png') }}"></a>
        @endauth
        @guest('web')
            <a href="{{ route('login') }}"><img src="{{ asset('img/log-in.png') }}"></a>
        @endguest
    </div>
</header>

