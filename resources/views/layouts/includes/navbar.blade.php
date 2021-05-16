<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0)">
                        <i class="ft-menu font-large-1"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="navbar-brand" href="javascript:void(0)">
                        <img class="brand-logo" alt="modern admin logo" src="{{ asset('assets/backend/images/logo/logo.png') }}">
                        <h3 class="brand-text">Modern Admin</h3>
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
                        <i class="la la-ellipsis-v"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <!-- Left UL -->
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0)">
                            <i class="ft-menu"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-link-expand" href="javascript:void(0)">
                            <i class="ficon ft-maximize"></i>
                        </a>
                    </li>
                </ul>

                <!-- Right UL -->
                <ul class="nav navbar-nav float-right">
                    <!-- User Links -->
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                            <span class="mr-1">Hello,
                                <span class="user-name text-bold-700">{{ auth()->user()->username }}</span>
                            </span>
                            <span class="avatar avatar-online">
                                <img src="{{ auth()->user()->image_path }}" alt="avatar">
                                <i></i>
                            </span>
                        </a>
                        <!-- Logout -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- User Profile Link -->
                            <a class="dropdown-item" href="{{ route('dashboard.user.profile', auth()->user()->username) }}">
                                <i class="ft-user info"></i> Profile
                            </a>

                            <!-- Edit Profile Link -->
                            <a class="dropdown-item" href="{{ route('dashboard.user.profile.edit', auth()->user()->username) }}">
                                <i class="ft-edit success"></i> Edit Profile
                            </a>

                            <!-- Website Link -->
                            <a class="dropdown-item" href="{{ route('/') }}">
                                <i class="ft-eye primary"></i> Website
                            </a>
                            <div class="dropdown-divider"></div>

                            <!-- Logout Link -->
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ft-power danger"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                    <!-- Languages Links -->
                    <li class="dropdown dropdown-language nav-item">
                        <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="flag-icon flag-icon-gb"></i>
                            <span class="selected-language"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a>
                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
