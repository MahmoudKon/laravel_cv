@if(count($rows) > 0)
    @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->user->username }}</td>
            <td>{{ $row->degree }}</td>
            <td>{{ $row->place }}</td>
            <td>{{ substr(strip_tags($row->description), 0, 20) . '...' }}</td>
            <td>{{ $row->start_date }}</td>
            <td>{{ $row->end_date }}</td>
            <td>{{ $row->created_at->diffForHumans() }}</td>
            <td width="131px">
                @include('backend/includes/btn')
            </td>
        </tr>
    @endforeach

    <tr> <td colspan="5"> {{ $rows->links() }} </td> </tr>
@else
    <tr>
        <td colspan="10">
            <div class="alert bg-red text-white" role="alert">
                <span class="text-white"> <strong>Oh snap!</strong> No Recourds </span>
            </div>
        </td>
    </tr>
@endif
