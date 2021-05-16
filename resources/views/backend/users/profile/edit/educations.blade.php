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
            <input type="date" name="start_date" class="form-control" placeholder="Select Start Date"
                    value="{{ $edu->start_date ?? old('start_date') }}" required>
        </div>
        <div>{{ $errors->all() ? $errors->first('start_date') : '' }}</div>
    </div>

    <div class="form-group has-feedback">
        <label>End Date :</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary border-primary white">
                    <i class="la la-calendar"></i>
                </span>
            </div>
            <input type="date" name="end_date" class="form-control" placeholder="Select End Date"
                    value="{{ $edu->end_date ?? old('end_date') }}" required>
        </div>
        <div>{{ $errors->all() ? $errors->first('end_date') : '' }}</div>
    </div>
</div>

<!-- Degree Input -->
<div class="col-md-8">
    <div class="form-group">
        <label>Degree :</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary border-primary white">
                    <i class="la la-pencil"></i>
                </span>
            </div>
            <input type="text" name="degree" class="form-control" placeholder="Your Degree"
                    value="{{ $edu->degree ?? old('degree') }}" required>
        </div>
        <div>{{ $errors->all() ? $errors->first('degree') : '' }}</div>
    </div>

    <div class="form-group">
        <label>Place :</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary border-primary white">
                    <i class="la la-pencil"></i>
                </span>
            </div>
            <input type="text" name="place" class="form-control" placeholder="Your Place"
                    value="{{ $edu->place ?? old('place') }}" required>
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
            {{ $edu->description ?? old('description') }}
        </textarea>
    </div>
    <div>{{ $errors->all() ? $errors->first('description') : '' }}</div>
</div>
<div class="col-12">
    <span class="input-group-append d-block" id="button-addon2">
        <button class="btn btn-danger delete_item d-block w-100" type="button" data-repeater-delete=""><i class="ft-x"></i> Delete</button>
    </span>
</div>
