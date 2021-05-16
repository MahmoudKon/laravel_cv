<!-- EDUCATION SECTION -->
<div class="card border-blue">
    <div class="card-header bg-blue">
        <h4 class="card-title text-white" id="repeat-form">Education</h4>
    </div>

    <div class="card-content collapse show">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-12 mb-2 contact-repeater">
                    <div data-repeater-list="education">
                        @if(count($user->educations) > 0)
                            @foreach($user->educations as $edu)
                            <div class="input-group col-12 p-2 mb-1 border-danger" data-repeater-item="">
                                @include('backend.users.profile.edit.educations')
                            </div>
                            @endforeach
                        @else
                        <div class="input-group col-12 p-2 mb-1 border-danger" data-repeater-item="">
                            @include('backend.users.profile.edit.educations')
                        </div>
                        @endif
                    </div>
                    <button type="button" data-repeater-create="" class="btn btn-primary">
                        <i class="ft-plus"></i> Add New Timeline
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- EXPERIENCE SECTION -->
<div class="card border-cyan">
    <div class="card-header bg-cyan">
        <h4 class="card-title text-white" id="repeat-form">Experience</h4>
    </div>

    <div class="card-content collapse show">
        <div class="card-body">
            <div class="row">
                <div class="form-group col-12 mb-2 contact-repeater">
                    <div data-repeater-list="experience">
                        @if(count($user->experiences) > 0)
                            @foreach($user->experiences as $exp)
                            <div class="input-group col-12 p-2 mb-1 border-danger" data-repeater-item="">
                                @include('backend.users.profile.edit.experiences')
                            </div>
                            @endforeach
                        @else
                        <div class="input-group col-12 p-2 mb-1 border-danger" data-repeater-item="">
                            @include('backend.users.profile.edit.experiences')
                        </div>
                        @endif
                    </div>
                    <button type="button" data-repeater-create="" class="btn btn-primary">
                        <i class="ft-plus"></i> Add New Timeline
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
