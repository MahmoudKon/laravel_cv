@extends('layouts.backend')

@section('content')
<div id="user-profile">
    <div class="row">
        <div class="col-12">
            @include('backend.users.profile.show.nav')
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="tab-content px-1 pt-1">
                    @include('backend.users.profile.show.general')
                    @include('backend.users.profile.show.skills')
                    @include('backend.users.profile.show.hobbies')
                    @include('backend.users.profile.show.experiences')
                    @include('backend.users.profile.show.educations')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
