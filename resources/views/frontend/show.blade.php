<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CV | {{ $user->username }}</title>
    <!-- The Page Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/icon/favicon.png') }}">
    <!-- For Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/animate.css') }}"> <!-- The Animations CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}"> <!-- The Main CSS Code -->
    <!-- Start Media Query -->
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="{{ asset('assets/frontend/css/media_desktop.css') }}"> <!-- DESKTOP -->
    <link rel="stylesheet" media="screen and (max-width: 1024px)" href="{{ asset('assets/frontend/css/media_small.css') }}"> <!-- SMALL -->
    <link rel="stylesheet" media="screen and (max-width: 768px)" href="{{ asset('assets/frontend/css/media_ipad.css') }}"> <!-- IPAD -->
    <link rel="stylesheet" media="screen and (max-width: 480px)" href="{{ asset('assets/frontend/css/media_mobile.css') }}"> <!-- MOBILE -->
    <!-- End Media Query -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/load.css') }}"> <!-- CSS Code About Loading Animation -->

    <style> .wow:first-child { visibility: hidden; } </style>
    <!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
</head>

<body>
    <div class="back">
        <a href="javascript:history.back()"><i class="fa fa-arrow-left"></i> Back</a>
    </div>
    <!-- Start Loading -->
    <div id="load-content">
        <div id="loader"> <span></span> <span></span> <span></span> <span></span> </div>
    </div>
    <!-- End Loading -->

    <div class="container" id="content">
        <!-- Includes all Sections On The Left Sections -->
        <section id="left-section">
            <!-- Start Main Information -->
                @include('frontend/includes/left_section/info')
            <!-- End Main Information -->

            <!-- Start Skills -->
                @include('frontend/includes/left_section/skills')
            <!-- End Skills -->

            <!-- Start Hobbies -->
                @include('frontend/includes/left_section/hobbies')
            <!-- End Hobbies -->

            <!-- Start Contact -->
                @include('frontend/includes/left_section/contact')
            <!-- End Contact -->
        </section>

        <!-- Includes all Sections On The Right Sections -->
        <section id="right-section" >
            @include('frontend/includes/right_section/about')     <!-- About -->

            @include('frontend/includes/right_section/education')  <!-- Education -->

            @include('frontend/includes/right_section/experience')  <!-- Experience -->

            @include('frontend/includes/right_section/awards')    <!-- Start Awards -->
        </section>
    </div>

    <div class="clear"></div> <!-- To Clear The Float -->

    <!-- Start Footer -->
    <footer id="footer">
        <p class="wow slideInDown" data-wow-delay="2s">
            copy right &copy; 2020 - <?= date('Y');?> all rights reserved by <a href="#">famous</a> ,<br>made by &hearts;
        </p>
    </footer>
    <!-- End Footer -->
    <!-- Start Javascript External Files -->
    <script type="text/javascript" src="{{ asset('assets/frontend/node_modules/jquery/dist/jquery.min.js') }}"></script> <!-- JQUERY -->
    <script type="text/javascript" src="{{ asset('assets/frontend/node_modules/wow.js/dist/wow.min.js') }}"></script> <!-- WOW File -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/loading.js') }}"></script> <!-- CUSTOME LOADING CODE -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/script.js') }}"></script> <!-- CUSTOME CODE -->
    <script type="text/javascript">  new WOW().init(); </script> <!-- WOW Start -->
    <!-- End Javascript External Files -->
</body>

</html>
