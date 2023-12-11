<nav class="main-header navbar navbar-expand navbar-white navbar-light shadow-sm justify-content-between">
    <div id="ant-message" style="position: fixed; z-index: 2000"></div>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">{{ __('Home') }}</a>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <span>{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">
                    {{ Auth::user()->name }}
                </span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fas fa-language"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item">
                    Tiếng Việt
                </a>
                <a class="dropdown-item">
                    English
                </a>
            </div>
        </li>
    </ul>
</nav>
