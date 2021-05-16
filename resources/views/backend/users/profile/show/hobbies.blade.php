@if(count($user->hobbies) > 0)
<div class="tab-pane" id="hobbies" role="hobbies" aria-labelledby="hobbies-tab1" aria-expanded="false">
    <div class="card-content">
        <div class="table-responsive">
            <table class="table table-active table-striped mb-0 w-75 m-auto">
                <tbody>
                    @foreach($user->hobbies as $hobby)
                    <tr>
                        <td width="65%"> {{ $hobby->hobbyname }} </td>
                        <td> {{ $hobby->icon }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
