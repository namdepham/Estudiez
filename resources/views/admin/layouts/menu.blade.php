<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('asset_home/images/logo-wide.png') }}" width="150px" alt="Estudiez"/><a href=""></a>
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        Dashboard
                    </a>
                </li>
                @if( Auth::guard('admin')->user()->type == \App\Constants\AdminType::SUPER_ADMIN )
                <li class="{{ request()->routeIs('subject.index') || request()->routeIs('subject.create') ? 'active' : '' }}">
                    <a href=" {{route('subject.index')}}">
                        Subject management
                    </a>
                </li>
                @endif
                <li class="{{ request()->routeIs('student.index') || request()->routeIs('student.create') ? 'active' : '' }}">
                    <a href="{{ route('student.index') }}">
                        Student management
                    </a>
                </li>
                <li class="{{ request()->routeIs('resource.index') || request()->routeIs('resource.index') ? 'active' : '' }}">
                    <a href=" {{ route('resource.index')  }} ">
                        Resource Management
                    </a>
                </li>
                <li class="{{ request()->routeIs('class.index') || request()->routeIs('class.index') ? 'active' : '' }}">
                    <a href=" {{ route('class.index')  }} ">
                        Class Management
                    </a>
                </li>
                @if( Auth::guard('admin')->user()->type == \App\Constants\AdminType::SUPER_ADMIN )
                <li class="{{ request()->routeIs('line.index') ? 'active' : '' }}">
                    <a href=" {{ route('line.index')}} ">
                        Line  Managemnet
                    </a>
                </li>
                @endif
                @if( Auth::guard('admin')->user()->type == \App\Constants\AdminType::SUPER_ADMIN )
                <li class="{{ request()->routeIs('admin') ? 'active' : '' }}">
                    <a href=" {{route('admin.index')}} ">
                        Admin Management
                    </a>
                </li>
                @endif


            </ul>
        </nav>
    </div>
</aside>
