<div class="input-group col-12 px-0 mb-1" data-repeater-item="">
    <input type="hidden" name="id" value="{{ $hobby->id ?? '' }}">
    <!-- Hobby Name Input -->
    <div class="col-md-8">
        <div class="form-group">
            <label>Hobby :</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-primary border-primary white">
                        <i class="ft ft-zap"></i>
                    </span>
                </div>
                <input type="text" name="hobbyname" class="form-control" placeholder="football" required
                        value="{{ $hobby->hobbyname ?? old('hobbyname') }}">
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
                <input type="text" name="icon" class="form-control" placeholder="ball" required
                        value="{{ $hobby->icon ?? old('icon') }}">
                </div>
                <span class="glyphicon glyphicon-envelope form-control-feedback">
                    {{ $errors->all() ? $errors->first('icon') : '' }}
                </span>
        </div>
    </div>

    <div class="col-1">
        <label> Del :</label>
        <span class="input-group-append" id="button-addon2">
            <button class="btn btn-danger delete_item" type="button" data-repeater-delete=""><i class="ft-x"></i></button>
        </span>
    </div>
</div>
