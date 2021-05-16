@if(count($user->educations) > 0)
<div class="tab-pane" id="educations" role="educations" aria-labelledby="educations-tab1" aria-expanded="false">
    <div id="educations-items" role="tablist" aria-multiselectable="true">
        <div class="card collapse-icon accordion-icon-rotate">
            @foreach($user->educations as $index => $item)
            <!-- Item -->
            <div id="edu{{ $index }}" class="card-header border-success">
                <a data-toggle="collapse" data-parent="#educations-items" href="#edu-{{ $index }}" aria-expanded="false" aria-controls="experiences" class="card-title lead success collapsed">
                    <i class="ft ft-calendar"></i>
                    {{ $index + 1 }}  # {{ date('Y', strtotime($item->start_date)) . '-' . date('Y', strtotime($item->end_date)) }}
                </a>
            </div>
            <div id="edu-{{ $index }}" role="tabpanel" aria-labelledby="edu{{ $index }}" class="card-collapse border-success collapse" aria-expanded="true">
                <div class="card-content">
                    <div class="card-body">
                        <h3 class="card-title font-weight-bold font-medium-5 mb-0 info"> {{ $item->degree }} </h3>
                        <h3 class="card-title dark mt-0"> <i> {{ $item->place }} </i> </h3>
                        <p class="card-title font-medium-1"> {!! $item->description !!} </p>
                    </div>
                </div>
            </div>
            <!-- / Item -->
            @endforeach
        </div>
    </div>
</div>
@endif
