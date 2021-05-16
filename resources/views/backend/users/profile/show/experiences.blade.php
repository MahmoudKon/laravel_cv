@if(count($user->experiences) > 0)
<div class="tab-pane" id="experiences" role="experiences" aria-labelledby="experiences-tab1" aria-expanded="false">
    <div id="experiences-items" role="tablist" aria-multiselectable="true">
        <div class="card collapse-icon accordion-icon-rotate">
            @foreach($user->experiences as $index => $item)
            <!-- Item -->
            <div id="exp{{ $index }}" class="card-header border-success bg-darken-4">
                <a data-toggle="collapse" data-parent="#experiences-items" href="#exp-{{ $index }}" aria-expanded="false" aria-controls="experiences" class="card-title lead success collapsed">
                    <i class="la la-calendar"></i>
                    {{ $index + 1 }}  # {{ date('Y', strtotime($item->start_date)) . '-' . date('Y', strtotime($item->end_date)) }}
                </a>
            </div>
            <div id="exp-{{ $index }}" role="tabpanel" aria-labelledby="exp{{ $index }}" class="card-collapse border-success collapse" aria-expanded="true">
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
