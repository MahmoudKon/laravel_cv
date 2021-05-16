@extends('layouts.backend')

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

@section('content')

<section id="icon-tabs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- The Header Of Card -->
                <div class="card-header bg-primary bg-darken-4 text-white">
                    <h4 class="card-title text-white">
                        Create New User
                    </h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form action="{{ route('dashboard.user.profile.update', $user->username) }}"
                                id="wizard"  enctype="multipart/form-data"
                                method="POST" class="icons-tab-steps wizard-circle">
                                @csrf
                            <!-- Step 1 [USER NAME, EMAIL, PASSWORD, CONFIRM, IMAGE] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 1</h6>
                            <fieldset>
                                @include('backend.users.profile.edit.step1')
                            </fieldset>

                            <!-- Step 2  [FULL NAME, JOB, ADDRESS, PHONE, BIRTHDAY, GENDER] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 2</h6>
                            <fieldset>
                                @include('backend.users.profile.edit.step2')
                            </fieldset>

                            <!-- Step 3 [SKILLS & HOBBIES] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 3</h6>
                            <fieldset>
                                @include('backend.users.profile.edit.step3')
                            </fieldset>

                            <!-- Step 4 [EDUCATION & EXPERIENCE] -->
                            <h6><i class="step-icon la la-pencil"></i>Step 4</h6>
                            <fieldset>
                                @include('backend.users.profile.edit.step4')
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with icon tabs section end -->
@endsection

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

