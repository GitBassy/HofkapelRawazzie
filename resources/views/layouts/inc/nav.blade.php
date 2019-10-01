<header>
    <div class="header-area ">
        <div class="header-top black-bg d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <div class="header-contact">
                            <div class="row" id="headerInfo">
                                <div class="col-sm-3">
                                    <a href="#">+31612345678</a>
                                </div>
                                <div class="col-sm-3" id="phoneHeader">
                                    <a href="#">rawazzie@mail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img id="navImg" src="{{ URL::asset('../img/homepage/navlogo.png') }}"/>

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <ul class="navbar-nav mr-auto">
                        &nbsp;
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/agenda">Agenda</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>

                    @elseif ( Auth::user()->role_id === 1 )
                    <ul class="nav navbar-nav">
                        &nbsp;
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/agenda">Agenda</a></li>
                        <li class="nav-item"><a class="nav-link" href="/afmelden">Afmelden</a></li>
                        <li class="nav-item"><a class="nav-link" href="/overzicht">Overzicht</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    </ul>

                    @elseif ( Auth::user()->role_id === 2 )
                        <ul class="nav navbar-nav">
                            &nbsp;
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/agenda">Agenda</a></li>
                            <li class="nav-item"><a class="nav-link" href="/afmelden">Afmelden</a></li>
                            <li class="nav-item"><a class="nav-link" href="/overzicht">Overzicht</a></li>
                            <li class="nav-item"><a class="nav-link" href="/berichttoevoegen">Bericht Toevoegen</a></li>
                            <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                        </ul>
                    @endif

                    <!-- login -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" id="btnLogin" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
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
            </div>
        </div>
    </nav>
</header>
