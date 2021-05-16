<div class="row">
    <input type="hidden" name="user_id" value="{{ $user->id }}">
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
                        value="{{ $user->username ?? old('username') }}">
            </div>
            <span class="glyphicon glyphicon-user form-control-feedback pl-1">
                {{ $errors->all() ? $errors->first("username") : '' }}
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
                        value="{{ $user->email ?? old('email') }}">
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
                <input type="file" name="user[image]" class="form-control image">
                <img src="{{ isset($user->image) ? $user->image_path : asset('uploads/images/upload.jpg') }}" class="img-thumbnail image-preview">
            </div>
            <div>{{ $errors->all() ? $errors->first('user[image]') : '' }}</div>
        </div>
    </div>
</div>
