@if(count($rows) > 0)
    @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->username }}</td>
            <td>{{ $row->email }}</td>
            <td>
                <img src="{{ $row->image_path }}" class="img-thumbnail w-100">
            </td>
            <td>
                <div class="badge badge-{{ $row->approve == 0 ? 'danger' : 'success'}}">{{ $row->approved }}</div>
                </td>
            <td>{{ $row->created_at->diffForHumans() }}</td>
            <td width="131px">
                @include('backend/includes/btn')
            </td>
        </tr>
    @endforeach

    <tr> <td colspan="5"> {{ $rows->links() }} </td> </tr>
@else
    <tr>
        <td colspan="5">
            <div class="alert bg-red text-white" role="alert">
                <span class="text-white"> <strong>Oh snap!</strong> No Recourds </span>
            </div>
        </td>
    </tr>
@endif
