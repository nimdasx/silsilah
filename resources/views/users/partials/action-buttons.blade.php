<div class="pull-right btn-group" role="group">
    @can ('edit', $user)
    {{ link_to_route('users.edit', trans('app.edit'), [$user->id], ['class' => 'btn btn-warning']) }}
    @endcan

{{--    {{ link_to_route('users.show', trans('app.show_profile').' '.$user->name, [$user->id], ['class' => Request::segment(3) == null ? 'btn btn-default active' : 'btn btn-default']) }}--}}
    <a href="{{ route('users.show',[$user->id]) }}"
       title="{{ trans('app.show_profile').' '.$user->name }}"
       class="{{ Request::segment(3) == null ? 'btn btn-default active' : 'btn btn-default' }}">
        <span class="glyphicon glyphicon-user"></span>
    </a>

{{--    {{ link_to_route('users.chart', trans('app.show_family_chart'), [$user->id], ['class' => Request::segment(3) == 'chart' ? 'btn btn-default active' : 'btn btn-default']) }}--}}
    <a href="{{ route('users.chart',[$user->id]) }}"
       title="{{ trans('app.show_family_chart') }}"
       class="{{ Request::segment(3) == 'chart' ? 'btn btn-default active' : 'btn btn-default' }}">
        <span class="glyphicon glyphicon-equalizer"></span>
    </a>

{{--    {{ link_to_route('users.tree', trans('app.show_family_tree'), [$user->id], ['class' => Request::segment(3) == 'tree' ? 'btn btn-default active' : 'btn btn-default']) }}--}}
    <a href="{{ route('users.tree',[$user->id]) }}"
       title="{{ trans('app.show_family_tree') }}"
       class="{{ Request::segment(3) == 'tree' ? 'btn btn-default active' : 'btn btn-default' }}">
        <span class="glyphicon glyphicon-tree-conifer"></span>
    </a>

{{--    {{ link_to_route('users.tree-couples', trans('app.show_family_tree_with_couples'), [$user->id], ['class' => Request::segment(3) == 'tree-couples' ? 'btn btn-default active' : 'btn btn-default']) }}--}}
    <a href="{{ route('users.tree-couples',[$user->id]) }}"
       title="{{ trans('app.show_family_tree_with_couples') }}"
       class="{{ Request::segment(3) == 'tree-couples' ? 'btn btn-default active' : 'btn btn-default' }}">
        <span class="glyphicon glyphicon-tree-deciduous"></span>
    </a>

    <a href="{{ route('users.list',[$user->id]) }}"
       title="List"
       class="{{ Request::segment(3) == 'list' ? 'btn btn-default active' : 'btn btn-default' }}">
        <span class="glyphicon glyphicon-list"></span>
    </a>

{{--    <a href="{{ route('users.table',[$user->id]) }}"--}}
{{--       title="{{ trans('app.show_table') }}"--}}
{{--       class="{{ Request::segment(3) == 'table' ? 'btn btn-default active' : 'btn btn-default' }}">--}}
{{--        <span class="glyphicon glyphicon-list"></span>--}}
{{--    </a>--}}

{{--    {{ link_to_route('users.marriages', trans('app.show_marriages'), [$user->id], ['class' => Request::segment(3) == 'marriages' ? 'btn btn-default active' : 'btn btn-default']) }}--}}
    <a href="{{ route('users.marriages',[$user->id]) }}"
       title="{{ trans('app.show_marriages') }}"
       class="{{ Request::segment(3) == 'marriages' ? 'btn btn-default active' : 'btn btn-default' }}">
        <span class="glyphicon glyphicon-heart"></span>
    </a>

    @if ($user->yod)
        {{ link_to_route('users.death', trans('user.death'), [$user->id], ['class' => Request::segment(3) == 'death' ? 'btn btn-default active' : 'btn btn-default']) }}
    @endif
</div>
