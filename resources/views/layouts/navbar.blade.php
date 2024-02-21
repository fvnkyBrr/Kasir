    <div class="header">

        <div class="header-left active">
            <a href="/" class="logo">
                <img src="/assets/img/logo.png" alt="">
            </a>
            <a href="/" class="logo-small">
                <img src="/assets/img/logo-small.png" alt="">
            </a>
            <a id="toggle_btn" href="javascript:void(0);">
            </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <ul class="nav user-menu">

            <li class="nav-item">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="#">
                        <div class="searchinputs">
                            <input type="text" placeholder="Search Here ...">
                            <div class="search-addon">
                                <span><img src="/assets/img/icons/closes.svg" alt="img"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                    <span class="user-img"><img src="/assets/img/profiles/avator1.jpg" alt="">
                        <span class="status online"></span></span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <div class="profileset">
                            <span class="user-img"><img src="/assets/img/profiles/avator1.jpg" alt="">
                                <span class="status online"></span></span>
                            <div class="profilesets">
                                <h6>{{ Auth::user()->name }}</h6>
                                <h5>Admin</h5>
                            </div>
                        </div>
                        <hr class="m-0">
                        <a class="dropdown-item" href="/"> <i class="me-2" data-feather="user"></i>
                            My Profile</a>
                        <a class="dropdown-item" href="/"><i class="me-2"
                                data-feather="settings"></i>Settings</a>
                        <hr class="m-0">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item logout pb-0">Logout</button>
                        </form>
                            {{-- </form>
                    <a class="dropdown-item logout pb-0" href="#" ><img>
                        src="/assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
                </div> --}}
                    </div>
            </li>
        </ul>
    </div>
