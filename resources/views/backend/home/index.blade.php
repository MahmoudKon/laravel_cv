@extends('layouts.backend')

@section('content')

    @include('backend/home/statistic')

    <div class="row">
        <div class="col-xl-5 col-lg-12">
            @include('backend/home/approve')
            @include('backend/home/hobbies')
        </div>

        <div class="col-xl-7 col-lg-12">
            @include('backend/home/users')
            @include('backend/home/timelines')
        </div>
    </div>

@endsection
