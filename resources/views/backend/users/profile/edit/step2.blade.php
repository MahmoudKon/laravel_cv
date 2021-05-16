<div class="row">
    <input type="hidden" name="general_id" value="{{ $user->general->id }}">
    <!-- Website Input -->
    <div class="col-md-7">
        <div class="form-group">
            <label>Website :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-link"></i>
                    </span>
                </div>
                <input type="url" name="website" class="form-control" placeholder="http://www.google.com"
                        value="{{ $user->general->website ?? old('website') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('website') : '' }}</div>
        </div>
    </div>

    <!-- Full Name Input -->
    <div class="col-md-5">
        <div class="form-group">
            <label>Full Name:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-pencil"></i>
                    </span>
                </div>
                <input type="text" name="fullname" class="form-control" placeholder="Mahmoud Mohammed"
                        value="{{ $user->general->fullname ?? old('fullname') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('fullname') : '' }}</div>
        </div>
    </div>

    <!-- Gender Selection -->
    <div class="col-md-3">
        <div class="form-group has-feedback">
            <label>Gender :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-intersex"></i>
                    </span>
                </div>
                <select class="custom-select" name="gender">
                    <optgroup label="Select a User Gender">
                            <option value="male" {{ isset($user->general->gender) ? ($user->general->gender=='male'? 'selected' : '') : (old('gender') == 'male' ? 'selected' : '') }}>Male </option>
                            <option value="female" {{ isset($user->general->gender) ? ($user->general->gender=='female'? 'selected' : '') : (old('gender') == 'female' ? 'selected' : '') }}> Female </option>
                    </optgroup>
                </select>
            </div>
            <div>{{ $errors->all() ? $errors->first('gender') : '' }}</div>
        </div>
    </div>

    <!-- Birthday Input -->
    <div class="col-md-4">
        <div class="form-group has-feedback">
            <label>Birthday :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-calendar"></i>
                    </span>
                </div>
                <input type="text" name="birthday" class="form-control maxYear" placeholder="Select Your Birthday"
                        value="{{ $user->general->birthday ?? old('birthday') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('birthday') : '' }}</div>
        </div>
    </div>

    <!-- Jop Input -->
    <div class="col-md-5">
        <div class="form-group">
            <label>Job :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-at-sign"></i>
                    </span>
                </div>
                <input type="text" name="job" class="form-control" placeholder="Web Developer"
                        value="{{ $user->general->job ?? old('job') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('job') : '' }}</div>
        </div>
    </div>

    <!-- Phone Input -->
    <div class="col-md-5">
        <div class="form-group">
            <label>Phone :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-phone"></i>
                    </span>
                </div>
                <input type="tel" name="phone" class="form-control" placeholder="01156455369"
                        value="{{ $user->general->phone ?? old('phone') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('phone') : '' }}</div>
        </div>
    </div>

    <!-- Address Input -->
    <div class="col-md-7">
        <div class="form-group">
            <label>Address :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-home"></i>
                    </span>
                </div>
                <input type="text" name="address" class="form-control" placeholder="Your Address"
                        value="{{ $user->general->address ?? old('address') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('address') : '' }}</div>
        </div>
    </div>

    <!-- About Textarea -->
    <div class="col-md-6">
        <h4 class="p-1 text-white mb-0 bg-blue-grey bg-darken-3">About User :</h4>
        <div class="form-group">
            <textarea id="ckeditor-language" class="ckeditor-language ckeditor" name="about"
                        placeholder="Please Write about you here..."
                        rows="15" required>{{ $user->general->about ?? old('about') }}</textarea>
        </div>
        <div>{{ $errors->all() ? $errors->first('about') : '' }}</div>
    </div>

    <!-- Awards Textarea -->
    <div class="col-md-6">
        <h4 class="p-1 text-white mb-0 bg-blue-grey bg-darken-4">Award User :</h4>
        <div class="form-group">
            <textarea id="ckeditor-language" class="ckeditor-language ckeditor" name="awards"
                        placeholder="Please Write Awards you here..."
                        rows="15" required>{{ $user->general->awards ?? old('awards') }}</textarea>
        </div>
        <div>{{ $errors->all() ? $errors->first('awards') : '' }}</div>
    </div>
</div>
