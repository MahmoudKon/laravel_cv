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
                <select class="custom-select" name="user_id" id="user_id" {{ isset($skill->user_id) ? 'disabled' : ''  }}>
                    @if(auth()->user()->permissions == 'user')
                        <option value="{{ auth()->user()->id}}">  {{ auth()->user()->username }} </option>
                    @else
                        @if($users->count() > 0)
                            <optgroup label="Select a User Name">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}"
                                            {{ isset($skill->user_id) ? ($skill->user_id == $user->id ? 'selected' : '') : (old('user_id') == $user->id ? 'selected' : '') }}>
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

    <!-- Skill Name Input -->
    <div class="col-md-5">
        <label for="skillname">Skill Name :</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary border-primary white">
                    <i class="ft ft-star"></i>
                </span>
            </div>
            <input type="text" name="skillname" id="skillname" class="form-control" placeholder="football" required
                    value="{{ isset($skill->skillname) ? $skill->skillname : old('skillname') }}">
        </div>
        <span class="glyphicon glyphicon-user form-control-feedback">
            {{ $errors->all() ? $errors->first('skillname') : '' }}
        </span>
    </div>

    <!-- Level Input -->
    <div class="col-md-3">
        <div class="form-group has-feedback">
            <label for="level">Skill Level :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-loader"></i>
                    </span>
                </div>
                <input type="number" name="level" id="level" class="form-control" placeholder="1 To 5" required
                        value="{{ isset($skill->level) ? $skill->level : old('level') }}">
            </div>
            <span class="glyphicon glyphicon-envelope form-control-feedback">
                {{ $errors->all() ? $errors->first('level') : '' }}
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
