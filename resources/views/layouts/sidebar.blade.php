<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ Request::is('dashboard') || Request::is('home') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><img src="/assets/img/icons/dashboard.svg" alt="img"><span>
                            Dashboard</span> </a>
                </li>
                    
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="/assets/img/icons/product.svg" alt="img"> <span> Master
                            Data </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('category') }}"
                                class="{{ Request::is('category') || Request::is('add_category') ? 'active' : '' }}">Category </a></li>
                        <li><a href="{{ route('product') }}"
                                class="{{ Request::is('product') || Request::is('add_product') ? 'active' : '' }}">Product </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="/assets/img/icons/users1.svg" alt="img"> <span>Users </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('add_user') }}"
                                class="{{ Request::is('add_user') ? 'active' : '' }}">New User </a></li>
                        <li><a href="{{ route('users') }}"
                                class="{{ Request::is('users') ? 'active' : '' }}">Users List </a></li>
                    </ul>
                </li>

                
            </ul>
        </div>
    </div>
</div>
