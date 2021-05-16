@extends('layouts.backend')

@section('content')
<div class="row" id="default">
    <div class="col-12">
        <div class="card border-primary">
            @include('backend.includes.card-header')
            <div class="card-content collapse show">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Website</th>
                                <th>Job</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Age</th>
                                <th>About</th>
                                <th>Awards</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="dataRows">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
