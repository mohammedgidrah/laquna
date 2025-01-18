<div class="main-header">
    <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('users.index') }}" class="logo">
                <img src="{{ asset('images/laquna.png') }}" alt="navbar brand"
                     style=" width: 175px; padding: 20px; background-color: #fff; display: block; margin: 0 auto;" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar"><i class="gg-menu-right"></i></button>
                <button class="btn btn-toggle sidenav-toggler"><i class="gg-menu-left"></i></button>
            </div>
            <button class="topbar-toggler more"><i class="gg-more-vertical-alt"></i></button>
        </div>
        <!-- End Logo Header -->
    </div>

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                <!-- Notifications (Optional, remove or keep as needed) -->
                {{-- Your notifications section can stay as is --}}
                
                <!-- User Profile -->
                <li class="nav-item topbar-user dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <!-- Profile Image -->
                            <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('assets/img/profile.png') }}"
                                alt="User Avatar" class="avatar-img rounded-circle" />
                        </div>
                        <span class="profile-username">
                            <span class="op-7">Hi,</span>
                            <span class="fw-bold">{{ Auth::user()->name }}</span>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg">
                                        <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('assets/img/profile.png') }}"
                                        alt="User Avatar" class="avatar-img rounded-circle" />
                                    </div>
                                    <div class="u-text">
                                        <h4>{{ Auth::user()->name }} </h4>
                                        <p class="text-muted">{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('home') }}"><i
                                        class="fa fa-home me-2"></i>Home</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><i class="fa fa-sign-out-alt me-2"
                                            style="color: red"></i>Logout</button>
                                </form>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- End Navbar -->
</div>
