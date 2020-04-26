@if(!empty(session()->get('locale')))
    @if(session()->get('locale') == 'en')
        <p>en</p>
    @else
        <p>bn</p>
    @endif
@else
    <p>default</p>
@endif

<p>{{trans('maya.failed')}}</p>