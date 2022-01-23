{{ Form::bsText(__('page.field.title'), 'title', null, ['required']) }}

{{ Form::bsText(__('app.slug'), 'slug', null, [], __('app.slug_help')) }}

{{ Form::bsTextarea(__('page.field.content'), 'content', null, ['required']) }}

{{ Form::bsCheckbox(__('page.field.content'), 'is_active') }}

{{ Form::bsBtnSaveFooter() }}
