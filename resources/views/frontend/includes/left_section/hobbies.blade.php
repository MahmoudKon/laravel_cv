<div class="hobbies">
    <h3 class="header wow fadeIn" data-wow-delay="1s">hobbies</h3>
    <ul class="hobby-list font-style">
        @if(isset($user))
            @foreach($user->hobbies as $index => $hope)
                <li class="wow fadeInDown" data-wow-delay="<?= rand(.5, 2); ?>s">
                    <i class='fas <?= $hope->icon; ?> icon'></i> {{ $hope->hobbyname }}
                </li>
            @endforeach
        @else
            <li class="wow fadeInDown" data-wow-delay="<?= rand(.5, 2); ?>s">
                NO HOBBIES YET
            </li>
        @endif
    </ul>
</div>
