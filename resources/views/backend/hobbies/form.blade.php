{{ csrf_field() }}

<div class="row">
    <!-- User ID Selection -->
    <div class="col-md-4">
        <div class="form-group has-feedback">
            <label id="user_id">Choose a User :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-user"></i>
                    </span>
                </div>
                <select class="custom-select" name="user_id" id="user_id" {{ isset($hobby->user_id) ? 'disabled' : ''  }}>
                    @if(auth()->user()->permissions == 'user')
                        <option value="{{ auth()->user()->id}}">  {{ auth()->user()->username }} </option>
                    @else
                        @if($users->count() > 0)
                            <optgroup label="Select a User Name">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}"
                                            {{ isset($hobby->user_id) ? ($hobby->user_id == $user->id ? 'selected' : '') : (old('user_id') == $user->id ? 'selected' : '') }}>
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

    <!-- Hobby Name Input -->
    <div class="col-md-5">
        <div class="form-group">
            <label>Hobby :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-zap"></i>
                    </span>
                </div>
                <input type="text" name="hobbyname" id="hobbyname" class="form-control" placeholder="football" required
                        value="{{ isset($hobby->hobbyname) ? $hobby->hobbyname : old('hobbyname') }}">
            </div>
            <span class="glyphicon glyphicon-user form-control-feedback">
                {{ $errors->all() ? $errors->first('hobbyname') : '' }}
            </span>
        </div>
    </div>

    <!-- Icon Input -->
    <div class="col-md-3">
        <div class="form-group has-feedback">
            <label>Icon :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-hash"></i>
                    </span>
                </div>
                <input type="text" name="icon" id="icon" class="form-control" placeholder="ball" required
                        value="{{ isset($hobby->icon) ? $hobby->icon : old('icon') }}">
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback">
                    {{ $errors->all() ? $errors->first('icon') : '' }}
                </span>
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
