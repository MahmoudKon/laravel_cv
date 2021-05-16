    <div class="skills">
        <h3 class="header wow fadeIn" data-wow-delay=".5s">skills</h3>
        <div class="skills-body">
            @if(isset($user))
                <!-- Skill Item -->
                @foreach($user->skills as $skill)
                <div class="skill-body wow fadeIn" data-wow-delay=".3s">
                    <p class="skill-name"> {{ $skill->skillname }} </p>
                    <span class="skill-stars">
                        <?php for($i = 0; $i < $skill->level; $i++) : ?>
                            <i class="fas fa-star wow fadeIn" data-wow-delay="<?= rand(.5, 1.5); ?>s"></i>
                        <?php endfor; ?>
                    </span>
                </div>
                @endforeach
            @else
                <p class="skill-name wow fadeIn" data-wow-delay="<?= rand(.5, 1.5); ?>s">
                    NO SKILLS YET
                </p>
            @endif
            <!-- Skill Item -->
        </div>
    </div>
