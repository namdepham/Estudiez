<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('asset_fe/img/img.png') }}" width="50px" alt="Cool Admin"/><a href=""></a>
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
                <li class="{{ request()->routeIs('categories.index') || request()->routeIs('categories.create') ? 'active' : '' }}">
                    <a href="{{ route('categories.index') }}">
                        Category
                    </a>
                </li>
                <li class="{{ request()->routeIs('products.index') || request()->routeIs('products.create') ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}">
                        Product
                    </a>
                </li>
                <li class="{{ request()->routeIs('projects.index') || request()->routeIs('projects.create') ? 'active' : '' }}">
                    <a href="{{ route('projects.index') }}">
                        Project
                    </a>
                </li>
                <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                    <a href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                <li class="{{ request()->routeIs('user') ? 'active' : '' }}">
                    <a href="{{ route('user') }}">
                        User Management
                    </a>
                </li>
                <li class="{{ request()->routeIs('order') ? 'active' : '' }}">
                    <a href="{{ route('order') }}">
                        Order Management
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin') ? 'active' : '' }}">
                    <a href="{{ route('admins.index') }}">
                        Admin Management
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
