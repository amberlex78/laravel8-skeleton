<div class="col-sm-10 offset-sm-2 pt-4 px-1">
    <p class="lead">SEO (Search Engine Optimization)</p>
</div>
<div class="row mb-3">
    {{ Form::label('seo_title', __('app.seo_title'), ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        {{ Form::text('seo_title', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="row mb-3">
    {{ Form::label('seo_keywords', __('app.seo_keywords'), ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        {{ Form::text('seo_keywords', null, ['class' => 'form-control']) }}
    </div>
</div>
<div class="row mb-3">
    {{ Form::label('seo_description', __('app.seo_description'), ['class' => 'col-sm-2 col-form-label']) }}
    <div class="col-sm-10">
        {{ Form::textarea('seo_description', null, ['class' => 'form-control', 'rows' => 2]) }}
    </div>
</div>
