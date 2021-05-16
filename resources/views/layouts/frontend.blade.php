@include('layouts.includes.header')
    <!-- Start Loading -->
    <div id="load-content" style="position: absolute; top: 0;">
        <div id="loader"> <span></span> <span></span> <span></span> <span></span> </div>
    </div>
    <!-- End Loading -->

    <!-- Start Header -->
    <header>
        @if(!auth()->user())
            <p class="wow slideInDown">
                You must <a href="{{ route('login') }}"> <b> login</b></a> first
                or <a href="{{ route('register') }}"> <b> register</b></a> first
            </p>
        @else
            <p class="text wow slideInDown ">
                <a href="{{ route('dashboard.') }}" style="text-decoration: none;"> <b> DASHBOARD</b></a>
            </p>
        @endif

        @if(isset($_POST['id']))
            <p class="text wow slideInDown ">
                <a href="" style="text-decoration: none;"> <b> BACK</b></a>
            </p>
        @endif
    </header>
    <!-- End Header -->

    <div class="app-content content mx-5" id="content">
        <div class="content-wrapper">
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>

@include('layouts.includes.footer')
