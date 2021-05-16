{{ csrf_field() }}

<div class="row">
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
                        value="{{ isset($general->website) ? $general->website : old('website') }}" required>
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
                        value="{{ isset($general->fullname) ? $general->fullname : old('fullname') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('fullname') : '' }}</div>
        </div>
    </div>

    <!-- User ID Selection -->
    <div class="col-md-3">
        <div class="form-group has-feedback">
            <label>Select a User :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-user"></i>
                    </span>
                </div>
                <select class="custom-select" name="user_id" {{ isset($general->user_id) ? 'disabled' : ''  }}>
                    @if(auth()->user()->permissions == 'user')
                        <option value="{{ auth()->user()->id }}"> {{ auth()->user()->username }} </option>
                    @else
                        @if($users->count() > 0)
                            <optgroup label="Select a User Name">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}"
                                            {{ isset($general->user_id) ? ($general->user_id == $user->id ? 'selected' : '') : (old('user_id') == $user->id ? 'selected' : '') }}>
                                        {{ $user->username }}
                                    </option>
                                @endforeach
                            </optgroup>
                        @else
                            <option> all users already have data </option>
                        @endif
                    @endif
                </select>
            </div>
            <div>{{ $errors->all() ? $errors->first('user_id') : '' }}</div>
        </div>
    </div>

    <!-- Phone Input -->
    <div class="col-md-3">
        <div class="form-group">
            <label>Phone :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-phone"></i>
                    </span>
                </div>
                <input type="tel" name="phone" class="form-control" placeholder="01156455369"
                        value="{{ isset($general->phone) ? $general->phone : old('phone') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('phone') : '' }}</div>
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
                            <option value="male" >Male </option>
                            <option value="female"> Female </option>
                    </optgroup>
                </select>
            </div>
            <div>{{ $errors->all() ? $errors->first('gender') : '' }}</div>
        </div>
    </div>

    <!-- Birthday Input -->
    <div class="col-md-3">
        <div class="form-group has-feedback">
            <label>Birthday :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-calendar"></i>
                    </span>
                </div>
                <input type="date" id="minYear" name="birthday" class="form-control" placeholder="Select Your Birthday"
                        value="{{ isset($general->birthday) ? $general->birthday : old('birthday') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('birthday') : '' }}</div>
        </div>
    </div>

    <!-- Jop Input -->
    <div class="col-md-6">
        <div class="form-group">
            <label>Job :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-at-sign"></i>
                    </span>
                </div>
                <input type="text" name="job" class="form-control" placeholder="Web Developer"
                        value="{{ isset($general->job) ? $general->job : old('job') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('job') : '' }}</div>
        </div>
    </div>

    <!-- address Input -->
    <div class="col-md-6">
        <div class="form-group">
            <label>Address :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-at-home"></i>
                    </span>
                </div>
                <input type="text" name="address" class="form-control" placeholder="User address..."
                        value="{{ isset($general->address) ? $general->address : old('address') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('address') : '' }}</div>
        </div>
    </div>


    <!-- About Textarea -->
    <div class="col-md-6">
        <h4 class="p-1 text-white mb-0 bg-blue-grey bg-darken-3">About User :</h4>
        <div class="form-group">
            <textarea id="ckeditor-language" class="ckeditor-language ckeditor" name="about"
                        placeholder="Please Write about you here..." rows="15" required>
                {{ isset($general->about) ? $general->about : old('about') }}
            </textarea>
        </div>
        <div>{{ $errors->all() ? $errors->first('about') : '' }}</div>
    </div>

    <!-- Awards Textarea -->
    <div class="col-md-6">
        <h4 class="p-1 text-white mb-0 bg-blue-grey bg-darken-4">Award User :</h4>
        <div class="form-group">
            <textarea id="ckeditor-language" class="ckeditor-language ckeditor" name="awards"
                        placeholder="Please Write Awards you here..." rows="15" required>
                {{ isset($general->awards) ? $general->awards : old('awards') }}
            </textarea>
        </div>
        <div>{{ $errors->all() ? $errors->first('awards') : '' }}</div>
    </div>

    <!-- BUTTONS -->
    <div class="col-md-4">
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
