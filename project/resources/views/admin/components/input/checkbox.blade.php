<div class="mb-3 row">
    <div class="col-sm-10 offset-sm-2">
        <input type="hidden" name="{{ $name }}" value="0">
        <div class="form-check">
            <label for="{{ $name }}" class="form-check-label">{{ $label }}</label>
            {{ Form::checkbox($name, 1, $value, ['class' => 'form-check-input', 'id' => $name]) }}
        </div>
    </div>
</div>
