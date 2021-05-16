<div class="card profile-with-cover">
    <div class="card-img-top img-fluid bg-cover height-200" style="background: url('<?= asset('assets/backend/images/bg_profile.jpg') ?>') 50%;"></div>
    <div class="media profil-cover-details w-100" style="margin-top: 145px;">
        <div class="media-left pl-2">
            <a href="#" class="profile-image">
                <img src="{{ $user->image_path }}" class="rounded-circle img-border height-100" alt="Card image">
            </a>
        </div>
        <div class="media-body pt-2 px-2">
            <h3 class="card-title font-large-1 font-weight-bold">
                {{ $user->username }}
            </h3>
        </div>
    </div>
    <!-- Tabs -->
    <nav class="navbar navbar-light navbar-profile align-self-end p-0 m-0">
        <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"></button>
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-tabs nav-top-border ">
                    <!-- General -->
                    @if($user->general !== null)
                    <li class="nav-item">
                        <a class="nav-link active" id="general-tab1" data-toggle="tab" href="#general" aria-controls="general" aria-expanded="true">
                            <i class="la la-user"></i> General
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    @endif

                    @if(count($user->skills) > 0)
                    <!-- Skills -->
                    <li class="nav-item">
                        <a class="nav-link" id="skills-tab1" data-toggle="tab" href="#skills" aria-controls="skills" aria-expanded="true">
                            <i class="la la-star-o"></i> Skills
                        </a>
                    </li>
                    @endif

                    @if(count($user->hobbies) > 0)
                    <!-- Hobbies -->
                    <li class="nav-item">
                        <a class="nav-link" id="hobbies-tab1" data-toggle="tab" href="#hobbies" aria-controls="hobbies" aria-expanded="true">
                            <i class="la la-heart-o"></i> Hobbies
                        </a>
                    </li>
                    @endif

                    @if(count($user->experiences) > 0)
                    <!-- Experiences -->
                    <li class="nav-item">
                        <a class="nav-link" id="experiences-tab1" data-toggle="tab" href="#experiences" aria-controls="experiences" aria-expanded="true">
                            <i class="ft ft-award"></i> Experiences
                        </a>
                    </li>
                    @endif

                    @if(count($user->educations) > 0)
                    <!-- Educations -->
                    <li class="nav-item">
                        <a class="nav-link" id="educations-tab1" data-toggle="tab" href="#educations" aria-controls="educations" aria-expanded="true">
                            <i class="la la-book"></i> Educations
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </nav>
    <!-- / Tabs -->
</div>
