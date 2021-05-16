<div class="input-group col-12 px-0 mb-1" data-repeater-item="">
    <input type="hidden" name="id" value="{{ $skill->id ?? '' }}">
    <!-- Skill Name Input -->
    <div class="col-md-8">
        <label for="skillname">Skill Name :</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary border-primary white">
                    <i class="ft ft-star"></i>
                </span>
            </div>
            <input type="text" name="skillname" id="skillname" class="form-control" placeholder="football" required
                    value="{{ $skill->skillname ?? old('skillname') }}">
        </div>
        <span class="glyphicon glyphicon-user form-control-feedback">
            {{ $errors->all() ? $errors->first('skills[$index ?? 0][skillname]') : '' }}
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
                        value="{{ $skill->level ?? old('level') }}">
            </div>
            <span class="glyphicon glyphicon-envelope form-control-feedback">
                {{ $errors->all() ? $errors->first('level') : '' }}
            </span>
        </div>
    </div>

    <div class="col-1">
        <label id="skill"> Del :</label>
        <span class="input-group-append" id="button-addon2">
            <button class="btn btn-danger delete_item" type="button" data-repeater-delete=""><i class="ft-x"></i></button>
        </span>
    </div>
</div>
