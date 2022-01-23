{{ Form::model($model, ['url' => urlToAction('destroy', $model), 'id' => 'form'.$model->id, 'method' => 'DELETE', 'class' => 'd-inline']) }}
<button type="button" class="btn btn-outline-danger btn-sm shadow-sm"
        data-bs-toggle="modal" data-bs-target="#modalConfirmDelete"
        data-entity-id="{{ $model->id }}">
    <i class="fa fa-trash fa-fw fa-sm"></i>@if(isset($text)) {{ $text }} @endif
</button>
{{ Form::close() }}

@includeWhen($includeModal, 'admin.embed.modal.confirm_delete')
