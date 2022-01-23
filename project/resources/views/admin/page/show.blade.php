@extends('admin.layouts.body_card')

@php /** @var Page $model */ use App\Models\Page @endphp

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ urlToAction('index') }}">{{ __('page.card_header.index') }}</a></li>
    <li class="breadcrumb-item active">{{ __('page.card_header.show') }}</li>
@endsection

@section('actions')
    <a href="{{ urlToAction('create') }}" class="btn btn-outline-success btn-sm shadow-sm">
        <i class="fas fa-plus fa-sm fa-fw"></i>
    </a>
    <a href="{{ urlToAction('edit', $model) }}" class="btn btn-outline-primary btn-sm shadow-sm">
        <i class="fas fa-pen fa-sm fa-fw"></i>
    </a>
    {{ Form::model($model, ['url' => urlToAction('destroy', $model), 'id' => 'form'.$model->id, 'method' => 'DELETE', 'class' => 'd-inline']) }}
        <button type="button" class="btn btn-outline-danger btn-sm shadow-sm"
                data-bs-toggle="modal" data-bs-target="#modalConfirmDelete"
                data-entity-id="{{ $model->id }}">
            <i class="fa fa-trash fa-fw fa-sm"></i>
        </button>
    {{ Form::close() }}
    @include('admin.embed.modal.confirm_delete')
@endsection

@section('content')
    <table class="table table-hover">
        <tbody>
        <tr><th>{{ __('page.field.id') }}</th><td>{{ $model->id }}</td></tr>
        <tr><th>{{ __('app.slug') }}</th><td>{{ $model->slug }}</td></tr>
        <tr><th>{{ __('page.field.title') }}</th><td>{{ $model->title }}</td></tr>
        <tr><th>{{ __('page.field.content') }}</th><td>{!! $model->content  !!}</td></tr>
        <tr><th>{{ __('page.field.is_active') }}</th><td>{{ $model->is_active_human }}</td></tr>
        <tr><th>{{ __('app.created_at') }}</th><td>{{ $model->created_at }}</td></tr>
        <tr><th>{{ __('app.updated_at') }}</th><td>{{ $model->updated_at }}</td></tr>
        </tbody>
    </table>
@endsection
