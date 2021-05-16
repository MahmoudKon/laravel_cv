@if($hobbies->count() > 0)
    @foreach($hobbies as $hobby)
        <tr>
            <td class="text-truncate">{{ $hobby->user->username }}</td>
            <td class="text-truncate">{{ $hobby->hobbyname }}</td>
        </tr>
    @endforeach
@else
    <tr> <td colspan="2"> <p class="alert alert-danger mb-0">No More...</p> </td> </tr>
@endif

