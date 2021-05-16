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

{{ csrf_field() }}

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

        <!-- Approve Input -->
        <div class="form-group has-feedback">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-activity"></i>
                    </span>
                </div>
                <select class="custom-select records" name="approve">
                    <optgroup label="Approving / The Admin Will Approve Him">
                        <option value="0" {{ isset($user->approve) ? ($user->approve == 0 ? 'selected' : '') : '' }}>Not Now</option>
                        <option value="1" {{ isset($user->approve) ? ($user->approve == 1 ? 'selected' : '') : '' }}>Approved</option>
                    </optgroup>
                </select>
            </div>
            <span class="glyphicon glyphicon-user form-control-feedback pl-1">
                {{ $errors->all() ? $errors->first('approve') : '' }}
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
            <a href="{{ route('dashboard.'. Request::segment(3) .'.index') }}" class="btn btn-warning mr-1 btn-sm">
                <i class="ft-x font-medium-3"></i> Cancel
            </a>

            <button type="submit" class="btn btn-primary btn-sm">
                @if(Request::segment(4) === 'create')
                    <i class="la la-save"></i> Save
                @else
                    <i class="la la-edit"></i> Update
                @endif
            </button>
        </div>
    </div>
</div>


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
