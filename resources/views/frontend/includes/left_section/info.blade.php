<div class="main-info">
    <img src="{{ isset($user) ? $user->image_path : asset('uploads/avatar.jpg') }}" alt="User Image" class="wow rollIn">
    <h2 class="name wow bounceIn" data-wow-delay="1s">
        {{ isset($user) ? $user->general->fullname : 'NO NAME YET' }}
    </h2>
    <h4 class="job wow bounceIn" data-wow-delay="1.3s">
        {{ isset($user) ? $user->general->job : 'NO JOB YET' }}
    </h4>
</div>
