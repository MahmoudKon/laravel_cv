@if($users->count() > 0)
    @foreach($users as $user)
        <tr>
            <td class="text-truncate">{{ $user->username }}</td>
            <td class="text-truncate">{{ $user->email }}</td>
            <td class="text-truncate">{{ $user->created_at->diffForHumans() }}</td>
        </tr>
    @endforeach
@else
    <tr> <td colspan="2"> <p class="alert alert-danger mb-0">No More...</p> </td> </tr>
@endif
