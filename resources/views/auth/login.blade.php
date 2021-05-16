@extends('layouts.login')

@section('content')
<section class="flexbox-container">
<div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="p-1">
                            <img src="{{ asset('assets/backend/images/logo/logo-dark.png') }}" alt="branding logo">
                        </div>
                    </div>
                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                        <span>Login with Modern</span>
                    </h6>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form-horizontal form-simple" action="{{ route('login') }}" method="post" novalidate>
                            @csrf
                            <!-- USER NAME INPUT -->
                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                <input type="text" class="form-control form-control-lg input-lg @error('username') is-invalid @enderror"
                                        name="username" placeholder="Your User Name"
                                        value="{{ old('username') ?? 'admin' }}" autocomplete="username" required>

                                <div class="form-control-position"> <i class="ft ft-user"></i> </div>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>

                            <!-- PASSWORD INPUT -->
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control form-control-lg input-lg  @error('password') is-invalid @enderror"
                                    name="password" placeholder="Enter Password" autocomplete="current-password"
                                    value="{{ old('password') ?? 123 }}" required>

                                <div class="form-control-position"> <i class="ft ft-lock"></i> </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </fieldset>

                            <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="">
                        <p class="float-sm-right text-center m-0">New to Moden Admin? <a href="{{ route('register') }}" class="card-link">Sign Up</a></p>
                    </div>
                </div>
            </div>
    </div>
</div>
</section>
@endsection

