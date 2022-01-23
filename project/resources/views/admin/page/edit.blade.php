@extends('admin.layouts.body_card')

@php /** @var Page $model */ use App\Models\Page @endphp

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ urlToAction('index') }}">{{ __('page.card_header.index') }}</a></li>
    <li class="breadcrumb-item active">{{ __('page.card_header.edit') }}</li>
@endsection

@section('actions')
    <button type="button" class="btn btn-primary btn-sm shadow-sm js-btn-save-form">
        <i class="fas fa-save fa-sm fa-fw"></i> {{ __('app.save') }}
    </button>
    <a href="{{ urlToAction('create') }}" class="btn btn-outline-success btn-sm shadow-sm">
        <i class="fas fa-plus fa-sm fa-fw"></i>
    </a>
    <a href="{{ urlToAction('show', $model) }}" class="btn btn-outline-secondary btn-sm shadow-sm">
        <i class="fas fa-eye fa-sm fa-fw"></i>
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
    {{ Form::model($model, ['url' => urlToAction('update', $model), 'name' => 'entityForm', 'method' => 'PUT']) }}
        @include ('admin.page._form')
    {{ Form::close() }}
@endsection
