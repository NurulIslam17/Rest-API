@php
    $route = Route::currentRouteName();
@endphp

<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('asset/images/logo.png')}}" style="width: 50px;height:50px;" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ $route == 'dashboard' ? 'active' : ''}}">
                    <a class="js-arrow" href="{{ route('dashboard')}}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="d-none {{ $route == 'multidata_insert' ? 'active' : ''}}">
                    <a class="js-arrow" href="{{ route('multidata_insert')}}">
                        <i class="fas fa-tachometer-alt"></i>Multi-data</a>
                </li>


                @if (auth()->user()->type == 1)
                    <li class="{{ $route == 'family_info' ? 'active' : ''}}">
                        <a class="js-arrow" href="{{ route('family_info')}}">
                            <i class="fas fa-tachometer-alt"></i>Family</a>
                    </li>

                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                @endif

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-gear"></i>Setting</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">User Profile</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-book"></i>CMS</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">User Profile</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
