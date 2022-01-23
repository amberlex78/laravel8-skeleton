@foreach($breadcrumbs as $action => $text)
    @if($action === 'last')
        <li class="breadcrumb-item active">{{ $text }}</li>
    @else
        <li class="breadcrumb-item"><a href="{{ urlToAction($action) }}">{{ $text }}</a></li>
    @endif
@endforeach
