<nav class="navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">BDE CESI Strasbourg</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="/">L'accueil</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="./boutique">La Boutique <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/boutique">Boutique</a></li>


                    <li><a href="/toparticles">Nos articles les plus vendus</a></li>
                </ul>
            </li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Les events <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/eventmois">Event du mois</a></li>
                    <li><a href="/eventspasses">Events passés</a></li>
                </ul>
            </li>

            <!-- will be part of the code when the session part works  -->

            {{--
                @if ($_SESSION['user']-> role = 'admin' || $_SESSION['user']-> role = 'BDE')
                    <a class="navbar-brand" href="/dljsonimage">DL Json ALL Image</a>
                @endif
                --}}
            <a class="navbar-brand" href="/dljsonimage">DL Json ALL Image</a>
        </ul>
        @yield('other nav')
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('shoppingCart')}}"><span class="glyphicon glyphicon-shopping-cart"></span> Panier
                    <span class="badge">{{ \Illuminate\Support\Facades\Session::has('cart') ? \Illuminate\Support\Facades\Session::get('cart')->quantiteTotal : ''}}
                    </span>
                </a>

                <!-- will be part of the code when the session part works  -->

            {{--
                @if ($_SESSION['user']->role)
                <li><a href="/welcome/déco"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
                @else
                <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
                <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
                @endif
                --}}
            <li><a href="{{route('register')}}"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
            <li><a href="{{route('login')}}"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
        </ul>

    </div>
</nav>
