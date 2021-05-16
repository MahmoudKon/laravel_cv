<div class="card-header bg-primary bg-darken-3 text-white">
    <h4 class="card-title text-white">{{ ucfirst(Request::segment(3)) . ' : ' . $count }}</h4>
    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
    <div class="heading-elements">
        <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
        </ul>
    </div>
</div>
<div class="row mt-2 px-2">
    <div class="col-sm-12 col-md-2">
        <div class="form-group">
            <select class="custom-select records">
                <option value="5" selected>5 Records</option>
                <option value="15">15 Records</option>
                <option value="25">25 Records</option>
                <option value="50">50 Records</option>
            </select>
        </div>
    </div>
    <div class="col-sm-6 col-md-5">
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-primary border-primary white" id="basic-addon7"><i class="la la-search"></i></span>
            </div>
            <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
        </div>
    </div>

    <div class="col-sm-6 col-md-2">
        <div class="form-group">
            <select class="custom-select columns-names">
                @foreach($colomns as $colomn)
                    <option value="{{ strtolower(str_replace(' ', '', $colomn)) }}">{{ $colomn }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-sm-6 col-md-3">
        <div class="form-group">
            <a href="{{ route('dashboard.' . Request::segment(3) . '.create') }}" class="btn btn-primary d-block">
                <i class="ft-plus"></i> Create {{ ucfirst(Request::segment(3)) }}
            </a>
        </div>
    </div>
</div>
