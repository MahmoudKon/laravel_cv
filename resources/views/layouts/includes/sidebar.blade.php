<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @if(auth()->user()->permissions !== 'user')
            <!-- Dashboard -->
            <li class=" nav-item {{ Request::segment(3) === null ? 'active' : '' }}">
                <a href="{{ route('dashboard.') }}">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Dashboard</span>
                </a>
            </li>
            @endif

            <!-- Users -->
            <li class="nav-item {{ Request::segment(3) == 'users' ? 'active' : '' }} ">
                <a href="{{ route('dashboard.users.index') }}">
                    <i class="la la-user"></i>
                    <span class="menu-title" data-i18n="nav.users.main">Users</span>
                </a>
            </li>

            <!-- General -->
            <li class="nav-item {{ Request::segment(3) == 'general' ? 'active' : '' }}">
                <a href="{{ route('dashboard.general.index') }}">
                    <i class="la la-info"></i>
                    <span class="menu-title" data-i18n="nav.general.main">General</span>
                </a>
            </li>

            <!-- Skills -->
            <li class="nav-item {{ Request::segment(3) == 'skills' ? 'active' : '' }}">
                <a href="{{ route('dashboard.skills.index') }}">
                    <i class="la la-star"></i>
                    <span class="menu-title" data-i18n="nav.general.main">Skills</span>
                </a>
            </li>

            <!-- Hobbies -->
            <li class="nav-item {{ Request::segment(3) == 'hobbies' ? 'active' : '' }}">
                <a href="{{ route('dashboard.hobbies.index') }}">
                    <i class="la la-check"></i>
                    <span class="menu-title" data-i18n="nav.general.main">Hobbies</span>
                </a>
            </li>

            <!-- Educations -->
            <li class="nav-item {{ Request::segment(3) == 'educations' ? 'active' : '' }}">
                <a href="{{ route('dashboard.educations.index') }}">
                    <i class="la la-book"></i>
                    <span class="menu-title" data-i18n="nav.general.main">Educations</span>
                </a>
            </li>

            <!-- Experiences -->
            <li class="nav-item {{ Request::segment(3) == 'experiences' ? 'active' : '' }}">
                <a href="{{ route('dashboard.experiences.index') }}">
                    <i class="ft ft-award"></i>
                    <span class="menu-title" data-i18n="nav.general.main">Experiences</span>
                </a>
            </li>
        </ul>
    </div>
</div>
