<header>

    <nav class="top-navbar">
        <ul>
            <li><a href="#">dc power visa</a></li>
            <li><a href="#">additional dc sites</a></li>
        </ul>
    </nav>


    <nav class="main-navbar">

        <ul>
            <li><a href="#"><img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo"></a></li>
            <li><a class="{{Route::currentRouteName() === 'characters' ? 'active' : '' }}" href="{{ route('characters') }}">characters</a></li>
            <li><a class="{{Route::currentRouteName() === 'comics'  || Route::currentRouteName() === 'comic' ? 'active' : '' }}" href="{{ route('comics') }}">comics</a></li>
            <li><a class="{{Route::currentRouteName() === 'movies' ? 'active' : '' }}" href="{{ route('movies') }}">movies</a></li>
            <li><a class="{{Route::currentRouteName() === 'tv' ? 'active' : '' }}" href="{{ route('tv') }}">tv</a></li>
            <li><a class="{{Route::currentRouteName() === 'games' ? 'active' : '' }}" href="{{ route('games') }}">games</a></li>
            <li><a class="{{Route::currentRouteName() === 'collectibles' ? 'active' : '' }}" href="{{ route('collectibles') }}">collectibles</a></li>
            <li><a class="{{Route::currentRouteName() === 'videos' ? 'active' : '' }}" href="{{ route('videos') }}">videos</a></li>
            <li><a class="{{Route::currentRouteName() === 'fans' ? 'active' : '' }}" href="{{ route('fans') }}">fans</a></li>
            <li><a class="{{Route::currentRouteName() === 'news' ? 'active' : '' }}" href="{{ route('news') }}">news</a></li>
            <li><a class="{{Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">shop</a></li>
            <li>
                <input type="text" placeholder="search">
                <img class="search-img" src="{{asset('images/search.png')}}">
            </li>
        </ul>
    </nav>

</header>
