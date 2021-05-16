<div class="row">
    <!-- Users Count -->
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="info">{{ $counts['users'] }}</h3>
                            <h6>Users</h6>
                        </div>
                        <div>
                            <i class="ft ft-users info font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style='width: <?= $counts["users"] . "%" ?>' aria-valuenow="{{ $counts['users'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <!-- end of users count -->

    <!-- Users Not Approved Count -->
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="warning approve_count">{{ $counts['users_not_approved'] }}</h3>
                            <h6>Without Approved</h6>
                        </div>
                        <div>
                            <i class="ft ft-user-x warning  font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-warning approve_progressbar" role="progressbar" style="width: <?= (($counts['users_not_approved'] * 100) / $counts['users']) . '%' ?>" aria-valuenow="{{ $counts['users_not_approved'] }}" aria-valuemin="0" aria-valuemax="{{ $counts['users'] }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>   <!-- end of not approved users count -->

    <!-- Skills Count -->
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="danger">{{ $counts['skills'] }}</h3>
                            <h6>Skills</h6>
                        </div>
                        <div>
                            <i class="ft ft-star danger font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: <?= $counts['skills'] . '%' ?>" aria-valuenow="{{ $counts['users_not_approved'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>   <!-- end of skills count -->

    <!-- Hobbies Count -->
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="success">{{ $counts['hobbies'] }}</h3>
                            <h6>Hobbies</h6>
                        </div>
                        <div>
                            <i class="ft ft-heart success font-large-2 float-right"></i>
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: <?= $counts['hobbies'] . '%' ?>" aria-valuenow="{{ $counts['users_not_approved'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>   <!-- end of hobbies count -->
</div>
