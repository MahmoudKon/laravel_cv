@if($approves->count() > 0)
    @foreach($approves as $user)
        <tr>
            <td class="text-truncate">{{ substr_replace($user->username, '...', 12) }}</td>
            <td class="text-truncate">
                <button class="btn btn-sm btn-outline-success box-shadow-2 round make_approve"
                        data-id={{ $user->id }}>
                    Approve
                </button>
            </td>
        </tr>
    @endforeach
@else
    <tr> <td colspan="2"> <p class="alert alert-danger mb-0">No More...</p> </td> </tr>
@endif

<!-- To Make Approve and Reload More Data -->
@if(isset($countApproves))
    <script>
        $('.approve_count').html('{{ $countApproves }}');
        var width = '{{ (($countApproves * 100) / $countUsers) }}';
        $('.approve_progressbar').css('width', width + '%');
    </script>
@endif
