@extends('layouts.backend')
<!-- This For Make The Input File Is Hidden -->
@push('css')
    <style>
        .show_image
        {
            overflow: hidden;
            position: relative;
        }
        .image
        {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 100;
            opacity: 0;
            cursor: pointer;
        }
        .image-preview{
            width: 100%;
            max-height: 315px;
        }
    </style>
@endpush
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
                        <form action="{{ route('dashboard.users.update', auth()->user()) }}" method="post" enctype="multipart/form-data">
                            {{ method_field('put') }}
                            @csrf

                            <div class="row">
                                <div class="col-md-8">
                                    <!-- User Name Input -->
                                    <div class="form-group has-feedback">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary border-primary white">
                                                    <i class="la la-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="username" class="form-control" placeholder="User Name" required
                                                    value="{{ isset($user->username) ? $user->username : old('username') }}">
                                        </div>
                                        <span class="glyphicon glyphicon-user form-control-feedback pl-1">
                                            {{ $errors->all() ? $errors->first('username') : '' }}
                                        </span>
                                    </div>

                                    <!-- Email Input -->
                                    <div class="form-group has-feedback">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary border-primary white">
                                                    <i class="ft ft-mail"></i>
                                                </span>
                                            </div>
                                            <input type="email" name="email" class="form-control" placeholder="Email" required
                                                    value="{{ isset($user->email) ? $user->email : old('email') }}">
                                        </div>
                                        <span class="glyphicon glyphicon-envelope form-control-feedback pl-1">
                                            {{ $errors->all() ? $errors->first('email') : '' }}
                                        </span>
                                    </div>

                                    <!-- Password Input -->
                                    <div class="form-group has-feedback">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary border-primary white">
                                                    <i class="la la-lock"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <span class="glyphicon glyphicon-lock form-control-feedback pl-1">
                                            {{ $errors->all() ? $errors->first('password') : '' }}
                                        </span>
                                    </div>

                                    <!-- Confirmed Password Input -->
                                    <div class="form-group has-feedback">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-primary border-primary white">
                                                    <i class="la la-lock"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
                                        </div>
                                        <span class="glyphicon glyphicon-lock form-control-feedback pl-1">
                                            {{ $errors->all() ? $errors->first('password_confirmation') : '' }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Upload & Show Image -->
                                <div class="col-md-4">
                                    <div class="form-group has-feedback">
                                        <div class="show_image">
                                            <input type="file" name="image" class="form-control image">
                                            <img src="{{ isset($user->image) ? $user->image_path : asset('uploads/images/upload.jpg') }}" class="img-thumbnail image-preview">
                                        </div>
                                        <div>{{ $errors->all() ? $errors->first('image') : '' }}</div>
                                    </div>
                                </div>

                                <!-- BUTTONS -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="la la-edit"></i> Update
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form><!-- end of form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



<!-- Get The Image Selected On The Tag Image -->
@push('js')
    <script>
        // FUNCTION TO GET THE UPLOADING IMAGE AND PREVIEW IT ON TAG IMAG
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $(".image-preview").attr("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        // DISPLAY THE IMAGE ON THE TAG
        $(".image").change(function () {
            readURL(this);
        });
    </script>
@endpush
