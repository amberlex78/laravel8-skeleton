<div class="row mb-3">
    <label for="title" class="col-sm-2 col-form-label required">{{ __('page.field.title') }}</label>
    <div class="col-sm-10">
        {{ Form::text('title', null, ['class' => $errors->has('title') ? ['form-control is-invalid'] : ['form-control'], 'required']) }}
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="slug" class="col-sm-2 col-form-label">{{ __('app.slug') }}</label>
    <div class="col-sm-10">
        {{ Form::text('slug', null, ['class' => $errors->has('slug') ? ['form-control is-invalid'] : ['form-control']]) }}
        <div class="form-text">{{ __('app.slug_help') }}</div>
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="row mb-3">
    <label for="content" class="col-sm-2 col-form-label required">{{ __('page.field.content') }}</label>
    <div class="col-sm-10">
        {{ Form::textarea('content', null, ['class' => $errors->has('content') ? ['form-control is-invalid'] : ['form-control']]) }}
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mb-3 row">
    <div class="col-sm-10 offset-sm-2">
        <input type="hidden" name="is_active" value="0">
        <div class="form-check">
            <label for="is_active" class="form-check-label">{{ __('page.field.is_active') }}</label>
            {{ Form::checkbox('is_active', 1, null, ['class' => 'form-check-input', 'id' => 'is_active']) }}
        </div>
    </div>
</div>

<div class="mb-3 row">
    <div class="col-sm-10 offset-sm-2">
        <hr>
        <button class="btn btn-primary mt-3"><i class="far fa-fw fa-save"></i> {{ __('app.save') }}</button>
    </div>
</div>
