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
                                <th>User Name</th>
                                <th>Degree</th>
                                <th>Place</th>
                                <th>Description</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Created At</th>
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
