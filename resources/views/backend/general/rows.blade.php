@if(count($rows) > 0)
    @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->fullname }}</td>
            <td>{{ $row->website }}</td>
            <td>{{ $row->job }}</td>
            <td>{{ $row->address }}</td>
            <td>{{ $row->phone }}</td>
            <td>{{ $row->age }}</td>
            <td>{{ substr(strip_tags($row->about), 0, 20) . '...' }}</td>
            <td>{{ substr(strip_tags($row->awards), 0, 20) . '...' }}</td>
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
