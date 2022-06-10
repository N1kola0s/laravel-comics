<header id="site_header">

    <nav class="navbar navbar-expand-sm navbar-light bg-light">

        <div class="container">

            <a class="navbar-brand" href="{{route('home')}}">
                @include('partials.logo')
            </a>

            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link {{Route::currentRouteName() === 'home' ? 'selected' : ''}}" href="{{route('home')}}">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'charachters' ? 'selected' : ''}}" href="{{route('characters')}}">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'comics' ? 'selected' : ''}}" href="{{route('comics')}}">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'movies' ? 'selected' : ''}}" href="{{route('movies')}}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'tv' ? 'selected' : ''}}" href="{{route('tv')}}">Tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'games' ? 'selected' : ''}}" href="{{route('games')}}">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'collectibles' ? 'selected' : ''}}" href="{{route('collectibles')}}">collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'videos' ? 'selected' : ''}}" href="{{route('videos')}}">videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'fans' ? 'selected' : ''}}" href="{{route('fans')}}">fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'news' ? 'selected' : ''}}" href="{{route('news')}}">news</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName() === 'shop' ? 'selected' : ''}}" href="{{route('shop')}}">shop</a>
                    </li>
                    
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

        </div>
        <!-- /.container -->

    </nav>
    <!-- /.navbar -->
    
</header>
<!-- /#site_header -->