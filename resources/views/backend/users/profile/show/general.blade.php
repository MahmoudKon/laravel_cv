@if($user->general !== null)
<div class="tab-pane active" role="general" id="general" aria-labelledby="general-tab1" aria-expanded="true">
    <div id="info" role="tablist" aria-multiselectable="true">
        <div class="card collapse-icon accordion-icon-rotate">
            <!-- Information -->
            <div id="info" class="card-header bg-info">
                <a data-toggle="collapse" data-parent="#info" href="#information" aria-expanded="false" aria-controls="information" class="card-title lead white collapsed">
                    <i class="la la-info"></i> Information
                </a>
            </div>
            <div id="information" role="tabpanel" aria-labelledby="info" class="card-collapse collapse border-info" aria-expanded="true" style="">
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table table-active table-striped mb-0">
                            <tbody>
                                <tr>
                                    <td width="15%">Full Name</td>
                                    <td>{{ $user->general->fullname }}</td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>{{ $user->general->website }}</td>
                                </tr>
                                <tr>
                                    <td>Job</td>
                                    <td>{{ $user->general->job }}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $user->general->address }}</td>
                                </tr>
                                <tr>
                                    <td>Birthday</td>
                                    <td>{{ $user->general->birthday . ' | ' . $user->general->age }}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{ $user->general->gender }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>{{ $user->general->phone }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- / Information -->

            <!-- About -->
            <div id="about-heading" class="card-header bg-purple">
                <a data-toggle="collapse" data-parent="#info" href="#about" aria-expanded="false" aria-controls="about" class="card-title lead white collapsed">
                    About
                </a>
            </div>
            <div id="about" role="tabpanel" aria-labelledby="about" class="card-collapse collapse border-purple" aria-expanded="true" style="">
                <div class="card-content">
                    <div class="card-body"> {!! $user->general->about !!} </div>
                </div>
            </div>
            <!-- / About -->

            <!-- Awards -->
            <div id="awards-heading" class="card-header bg-pink">
                <a data-toggle="collapse" data-parent="#info" href="#awards" aria-expanded="false" aria-controls="awards" class="card-title lead white collapsed">
                    Awards
                </a>
            </div>
            <div id="awards" role="tabpanel" aria-labelledby="awards" class="card-collapse collapse border-pink" aria-expanded="true" style="">
                <div class="card-content">
                    <div class="card-body"> {!! $user->general->awards !!} </div>
                </div>
            </div>
            <!-- / Awards -->
        </div>
    </div>
</div>
@endif
