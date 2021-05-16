<div class="card border-info">
    <div class="card-header bg-info text-white">
        <h4 class="card-title text-white">Latest Users</h4>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="card-content show">
        <div class="table-responsive">
            <table id="new-orders-table" class="table table-hover table-xl mb-0">
                <thead class="text-center">
                    <tr>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">Email</th>
                        <th class="border-top-0">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @include('backend.home.includes.users_list')
                </tbody>
            </table>
        </div>
    </div>
</div>
