<div class="awards">
    <h1 class="sempl-header wow  fadeIn" data-wow-delay="2s"> <i class="fas fa-trophy"></i> awards</h1>
    <div class="padding wow  bounceIn" data-wow-delay="2.4s">
        <p class="text">
            {!! isset($user) ? $user->general->awards : 'NO INFORMETION YET' !!}
        </p>
    </div>
</div>
