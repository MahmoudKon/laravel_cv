<div class="card border-success">
    <div class="card-header bg-success text-white">
        <h4 class="card-title text-white">Waiting For Approval</h4>
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
                        <th class="border-top-0">Approve</th>
                    </tr>
                </thead>
                <tbody id="approve">
                    @include('backend.home.includes.approve_list')
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- To Make Approve and Reload More Data -->
@push('js')
    <script>
        $(document).on('click', '.make_approve', function() {
            var btn = $(this);
                id = btn.data('id'),
                url = "{{ route('dashboard.users.update_approve') }}";

            $.ajax({
                url: url,
                type: "get",
                data: {
                    "id":id
                },
                success: function(data, textStatus, jqXHR) {
                    btn.closest('tr').hide(400, function() { setTimeout( $(this).remove(), 500 ); });
                    $('table #approve').html(data);
                }
            });
        });
    </script>
@endpush
