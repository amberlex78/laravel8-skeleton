<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has($msg))
            <div class="alert alert-{{ $msg }} mb-2 alert-dismissible fade show shadow-sm" role="alert">
                {{ Session::get($msg) }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    @endforeach
</div>
