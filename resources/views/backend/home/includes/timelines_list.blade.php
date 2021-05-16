<section id="timeline" class="timeline-left timeline-wrapper px-1" style="max-height: 250px; overflow:auto">

    @foreach($educations as $timeline)
    <ul class="timeline mb-0">
        <li class="timeline-line"></li>
        <li class="timeline-group my-0">
            <a href="javascript:void(0)" class="btn btn-primary">
                <i class="ft-calendar"></i>
                {{ date('Y', strtotime($timeline->start_date)) . '-' . date('Y', strtotime($timeline->end_date)) }}
            </a>
        </li>
        <li class="timeline-item pb-0">
            <div class="timeline-badge">
                <span class="bg-red bg-lighten-1" data-toggle="tooltip" data-placement="right" title="{{ $timeline->degree }}">
                    <i class="la la-plane"></i>
                </span>
            </div>
            <div class="timeline-card card border-grey border-lighten-2">
                <div class="card-header">
                    <h4 class="card-title">{{ $timeline->degree }}</h4>
                    <p class="card-subtitle text-muted pt-1">
                        <span class="font-small-3">{{ $timeline->place }}</span>
                        <span class="font-small-3"> | Created : {{ $timeline->created_at->diffForHumans() }}</span>
                    </p>
                </div>
                <div class="card-content">
                    <div class="card-body py-0">
                        {{ $timeline->description }}
                    </div>
                </div>
            </div>
        </li>
    </ul>
    @endforeach
</section>
