@if(count($rows) > 0)
    @foreach($rows as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->user->username }}</td>
            <td>{{ $row->skillname }}</td>
            <td>
                @for($i = 0; $i < $row->level; $i++)
                    <i class="la la-star"></i> <!-- uses solid style -->
                @endfor
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
        <td colspan="10">
            <div class="alert bg-red text-white" role="alert">
                <span class="text-white"> <strong>Oh snap!</strong> No Recourds </span>
            </div>
        </td>
    </tr>
@endif
