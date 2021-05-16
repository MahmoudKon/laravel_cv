<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <!-- This For Dashboard Home -->
                @if(Request::segment(3) !== null)
                    <li class="breadcrumb-item active">
                        <a href="{{ route('dashboard.') }}"> Dashboard </a>
                    </li>
                @else
                    <li class="breadcrumb-item"> Dashboard </li>
                @endif  <!-- End Dashboard Home Link -->

                <!-- This Link For Models -->
                @if(Request::segment(3) !== null &&  Request::segment(3) !== 'user')
                    @if(Request::segment(4) !== null)
                        <li class="breadcrumb-item active">
                            <a href="{{ route('dashboard.' . Request::segment(3) . '.index') }}">
                                {{ ucfirst(Request::segment(3)) }}
                            </a>
                        </li>
                    @else
                        <li class="breadcrumb-item"> {{ ucfirst(Request::segment(3)) }} </li>
                    @endif
                @else
                    <li class="breadcrumb-item"> {{ ucfirst(Request::segment(3)) }} </li>
                @endif  <!-- End Models Link -->

                <!-- This Link For [ CREATE, UPDATE, SHOW ] -->
                @if(Request::segment(4) !== null)
                    <li class="breadcrumb-item">
                        @if(Request::segment(5) !== null)
                            {{ ucfirst(Request::segment(5)) }}
                        @else
                            {{ ucfirst(Request::segment(4)) }}
                        @endif
                    </li>
                @endif  <!-- End Create, Update Link -->
            </ol>
        </div>
        </div>
    </div>
</div>
