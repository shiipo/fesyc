<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('admin.index') }}">Laravel</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            @if(Auth::user())
                <ul class="nav navbar-nav">
                    <li @yield('li-home')><a href="{{ route('admin.index') }}">Inicio</a></li>
                    @if(Auth::user()->admin())
                        <li @yield('li-users')><a href="{{ route('admin.usuarios.index') }}">Usuarios</a></li>
                    @endif
                </ul>
            @endif
            @if(Auth::user())
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ ucwords(Auth::user()->name) }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('logout') }}">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>