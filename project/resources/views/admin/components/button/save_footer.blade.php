<div class="mb-3 row">
    <div class="col-sm-10 offset-sm-2">
        <hr>
        <button class="btn btn-primary mt-3 js-btn-save-form">
            <i class="far fa-fw fa-save"></i> @if(isset($text)) {{ $text }} @else {{ __('app.save') }} @endif
        </button>
    </div>
</div>
