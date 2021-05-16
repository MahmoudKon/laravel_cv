<div class="card border-purple">
    <div class="card-header bg-purple text-white">
        <h4 class="card-title text-white">Latest Hobbies</h4>
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
                        <th class="border-top-0">User</th>
                        <th class="border-top-0">Hobby</th>
                    </tr>
                </thead>
                <tbody>
                    @include('backend.home.includes.hobbies_list')
                </tbody>
            </table>
        </div>
    </div>
</div>
