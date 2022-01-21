<div class="row mb-3">
    {{ Form::label('title', __('page.field.title'), ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        {{ Form::text('title', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="row mb-3">
    {{ Form::label('full_text', __('page.field.content'), ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        {{ Form::textarea('full_text', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="row mb-3">
    {{ Form::label('position', __('app.position'), ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        {{ Form::number('position', null, ['class' => 'form-control']) }}
    </div>
</div>

<div class="row">
    <div class="col-sm-10 offset-sm-2">
        {{ Form::hidden('enabled', 0) }}
        <div class="icheck-primary">
            {{ Form::checkbox('enabled', 1, null, ['id' => 'enabled']) }}
            <label for="enabled">{{ __('app.enabled') }}</label>
        </div>
    </div>
</div>

@include('admin.embed.form.fields_seo')

@include('admin.embed.form.btn_save')
