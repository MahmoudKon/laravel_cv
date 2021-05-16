<span class="dropdown">
    <button id="options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
    <span aria-labelledby="options" class="dropdown-menu mt-1 dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(62px, 31px, 0px); top: 0px; left: 0px; will-change: transform;">
        <a href="{{ route('dashboard.' . Request::segment(3) . '.edit', $row->id) }}" class="dropdown-item">
            <i class="ft-edit-2 primary"></i> Edit
        </a>
        <form method="post" action="{{ route('dashboard.' . Request::segment(3) . '.destroy', $row->id) }}">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button class="btn dropdown-item delete">
                <i class="ft-trash-2 danger"></i> Delete
            </button>
        </form>

        @if(Request::segment(3) === 'users')
            <a href="{{ route('dashboard.user.profile', $row->username) }}" class="dropdown-item">
                <i class="ft-eye info"></i> Show
            </a>
        @endif
    </span>
</span>

