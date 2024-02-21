<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ Request::is('/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}"><img src="/assets/img/icons/dashboard.svg" alt="img"><span>
                            Dashboard</span> </a>
                </li>
                <li class="submenu ">
                    <a href="javascript:void(0);"><img src="/assets/img/icons/sales1.svg" alt="img"><span>
                            Transaksi</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('orders') }}">Orders</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="/assets/img/icons/product.svg" alt="img"> <span> Master
                            Data </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('kategori') }}"
                                class="{{ Request::is('kategori*') ? 'active' : '' }}">Kategori </a></li>
                        <li><a href="{{ route('product') }}"
                                class="{{ Request::is('product*') ? 'active' : '' }}">Product </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="/assets/img/icons/users1.svg" alt="img"> <span> Data Users </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('users') }}"
                                class="{{ Request::is('users') ? 'active' : '' }}">Data Users </a></li>
                        <li><a href="/dashboard"
                                class="{{ Request::is('Laporan') ? 'active' : '' }}">Laporan </a></li>
                    </ul>
                </li>

                
            </ul>
        </div>
    </div>
</div>
