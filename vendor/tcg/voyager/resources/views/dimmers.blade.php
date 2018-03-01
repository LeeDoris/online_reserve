@php
$admin_dimmers = \Arrilot\Widgets\Facade::group('voyager::admin_dimmers');
$manager_dimmers = \Arrilot\Widgets\Facade::group('voyager::manager_dimmers');
$user_dimmers = \Arrilot\Widgets\Facade::group('voyager::user_dimmers');
$count = $admin_dimmers->count();

$classes = [
    'col-xs-12',
    'col-sm-'.($count >= 2 ? '6' : '12'),
    'col-md-'.($count >= 3 ? '4' : ($count >= 2 ? '6' : '12')),
];
$class = implode(' ', $classes);
$prefix = "<div class='{$class}'>";
$surfix = '</div>';
@endphp
@if(Auth::user()->role_id == 1)
    @if ($admin_dimmers->any())
        <div class="clearfix container-fluid row">
            {!! $prefix.$admin_dimmers->setSeparator($surfix.$prefix)->display().$surfix !!}
        </div>
    @endif
@elseif(Auth::user()->role_id == 3)
    @if ($manager_dimmers->any())
        <div class="clearfix container-fluid row">
            {!! $prefix.$manager_dimmers->setSeparator($surfix.$prefix)->display().$surfix !!}
        </div>
    @endif
@elseif(Auth::user()->role_id == 2)
    @if ($user_dimmers->any())
        <div class="clearfix container-fluid row">
            {!! $prefix.$user_dimmers->setSeparator($surfix.$prefix)->display().$surfix !!}
        </div>
    @endif
@endif