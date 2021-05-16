@extends('layouts.frontend')

@push('css')
    <!-- The Page Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/frontend/icon/favicon.png') }}">
    <!-- For Fontawesome CDN Link -->
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"> -->
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
@endpush

@section('content')

<div class="table-responsive">
        <table class="table mb-0">
            <thead>
                <tr>
                    <td> # </td>
                    <td> User Name </td>
                    <td> Email </td>
                    <td> Show </td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                    <tr>
                        <td> {{ $index + 1 }} </td>
                        <td> {{ $user->username }} </td>
                        <td> {{ $user->email }} </td>
                        <td>
                            <a href="{{ route('show', $user) }}" class="btn btn-primary"> <i class="ft ft-eye"></i> Show </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </tbody>
        </table>
    </div>
@endsection

@push('js')
    <!-- Start Javascript External Files -->
    <script type="text/javascript" src="{{ asset('assets/frontend/node_modules/jquery/dist/jquery.min.js') }}"></script> <!-- JQUERY -->
    <script type="text/javascript" src="{{ asset('assets/frontend/node_modules/wow.js/dist/wow.min.js') }}"></script> <!-- WOW File -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/loading.js') }}"></script> <!-- CUSTOME LOADING CODE -->
    <script type="text/javascript" src="{{ asset('assets/frontend/js/script.js') }}"></script> <!-- CUSTOME CODE -->
    <script type="text/javascript">
        new WOW().init();
    </script> <!-- WOW Start -->
    <!-- End Javascript External Files -->
@endpush
