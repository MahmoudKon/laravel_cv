@extends('layouts.login')

<!-- This For Make The Input File Is Hidden -->
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
        max-height: 220px;
    }
</style>

@section('content')

<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-6 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
            <div class="card-header border-0">
                <div class="card-title text-center">
                <img src="{{ asset('assets/backend/images/logo/logo-dark.png') }}" alt="branding logo">
                </div>
                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                <span>Create Account</span>
                </h6>
            </div>
            <div class="card-content">
                <div class="card-body">
                <form class="form-horizontal form-simple" action="{{ route('register') }}" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        @csrf
                        <!-- User Name Input -->
                        <div class="col-md-7">
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="text" class="form-control form-control-lg input-lg @error('username') is-invalid @enderror"
                                            name="username"  placeholder="User Name" required value="{{ old('username') }}">
                                <div class="form-control-position p-1">
                                    <i class="ft-user"></i>
                                </div>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>

                            <!-- Email Input -->
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="email" class="form-control form-control-lg input-lg @error('email') is-invalid @enderror"
                                            name="email"  placeholder="Your Email Address" required value="{{ old('email') }}">
                                <div class="form-control-position p-1">
                                    <i class="ft-mail"></i>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>

                            <!-- Password Input -->
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="password" class="form-control form-control-lg input-lg @error('password') is-invalid @enderror"
                                            name="password"  placeholder="Your Password" required value="{{ old('password') ?? 123 }}">
                                <div class="form-control-position p-1">
                                    <i class="ft-lock"></i>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>

                            <!-- Password Confirmation Input -->
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <input type="password" class="form-control form-control-lg input-lg @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" placeholder="Password Confirmation" required value="{{ old('password_confirmation') ?? 123 }}">
                                <div class="form-control-position p-1">
                                    <i class="ft ft-lock"></i>
                                </div>
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>
                        </div>

                        <div class="col-md-5">
                            <!-- Upload & Show Image -->
                            <fieldset class="form-group position-relative has-icon-left">
                                <div class="show_image">
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror image">
                                    <img src="{{ asset('uploads/images/upload.jpg') }}" class="img-thumbnail image-preview">
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
                </form>
                </div>
                <p class="text-center">Already have an account ? <a href="{{ route('login') }}" class="card-link">Login</a></p>
            </div>
            </div>
        </div>
    </div>
</section>

@endsection
