<div class="row mb-3">
    <label for="{{ $name }}" class="col-sm-2 col-form-label @if(in_array('required', $attributes))required @endif">
        {{ $label }}
    </label>
    <div class="col-sm-10">
        {{ Form::input($type, $name, $value, array_merge(['class' => $errors->has($name) ? 'form-control is-invalid' : 'form-control'], $attributes)) }}
        @if(isset($help))
            <div class="form-text">{{ $help }}</div>
        @endif
        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
