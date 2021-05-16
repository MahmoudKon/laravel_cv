{{ csrf_field() }}

<div class="row">
    <!-- User ID Input -->
    <div class="col-md-4">
        <div class="form-group has-feedback">
            <label>Select a User :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-user"></i>
                    </span>
                </div>
                <select class="custom-select" name="user_id" {{ isset($education->user_id) ? 'disabled' : ''  }}>
                    @if(auth()->user()->permissions == 'user')
                        <option value="{{ auth()->user()->id}}">  {{ auth()->user()->username }} </option>
                    @else
                        @if($users->count() > 0)
                            <optgroup label="Select a User Name">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}"
                                            {{ isset($education->user_id) ? ($education->user_id == $user->id ? 'selected' : '') : (old('user_id') == $user->id ? 'selected' : '') }}>
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

    <!-- Start Date Input -->
    <div class="col-md-4">
        <div class="form-group has-feedback">
            <label>Start Date :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-calendar"></i>
                    </span>
                </div>
                <input type="date" id="maxYear" name="start_date" class="form-control" placeholder="Select Start Date"
                        value="{{ isset($education->start_date) ? $education->start_date : old('start_date') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('start_date') : '' }}</div>
        </div>
    </div>

    <!-- End Date Input -->
    <div class="col-md-4">
        <div class="form-group has-feedback">
            <label>End Date :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-calendar"></i>
                    </span>
                </div>
                <input type="date" id="minYear" name="end_date" class="form-control" placeholder="Select End Date"
                        value="{{ isset($education->end_date) ? $education->end_date : old('end_date') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('end_date') : '' }}</div>
        </div>
    </div>

    <!-- Degree Input -->
    <div class="col-md-5">
        <div class="form-group">
            <label>Degree :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-pencil"></i>
                    </span>
                </div>
                <input type="text" name="degree" class="form-control" placeholder="Your Degree"
                        value="{{ isset($education->degree) ? $education->degree : old('degree') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('degree') : '' }}</div>
        </div>
    </div>

    <!-- Place Input -->
    <div class="col-md-7">
        <div class="form-group">
            <label>Place :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="la la-pencil"></i>
                    </span>
                </div>
                <input type="text" name="place" class="form-control" placeholder="Your Place"
                        value="{{ isset($education->place) ? $education->place : old('place') }}" required>
            </div>
            <div>{{ $errors->all() ? $errors->first('place') : '' }}</div>
        </div>
    </div>

    <!-- Description Textarea -->
    <div class="col-md-12">
        <h4 class="p-1 text-white mb-0 bg-blue-grey bg-darken-3">Description :</h4>
        <div class="form-group">
            <textarea id="ckeditor-language" class="ckeditor-language ckeditor" name="description"
                        placeholder="Please Write Description you here..." rows="15" required>
                {{ isset($education->description) ? $education->description : old('description') }}
            </textarea>
        </div>
        <div>{{ $errors->all() ? $errors->first('description') : '' }}</div>
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
