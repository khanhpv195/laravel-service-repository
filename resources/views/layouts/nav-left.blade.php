<aside class="main-sidebar sidebar-light-info shadow">
    <div class="d-flex justify-content-center align-items-center py-3">
        <a href="{{ route('home') }}">
            <img src="{{ asset('image/logo.png') }}" width="50px">
        </a>
    </div>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="{{ route('home') }}" class="nav-link home">
                        <i class="nav-icon fas fa-home"></i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('users.index') }}" class="nav-link account">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            {{ __('Account') }}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</aside>
