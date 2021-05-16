@extends('layouts.backend')

@section('content')

<div class="content-body">
    <div class="row" id="default">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="card-title text-white">Edit User</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="{{ route('dashboard.users.update', $user) }}" method="post" enctype="multipart/form-data">
                            {{ method_field('put') }}
                            @include('backend/users/form')

                        </form><!-- end of form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
