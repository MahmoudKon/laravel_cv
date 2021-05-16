@if(count($user->skills) > 0)
<div class="tab-pane" id="skills" role="skills" aria-labelledby="skills-tab1" aria-expanded="false">
    <div class="card-content">
        <div class="table-responsive">
            <table class="table table-active table-striped mb-0 w-75 m-auto">
                <tbody>
                    @foreach($user->skills as $skill)
                    <tr>
                        <td width="70%"> {{ $skill->skillname }} </td>
                        <td>
                            @for($i = 0; $i < $skill->level; $i++)
                                <i class="la la-star"></i>
                            @endfor
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
