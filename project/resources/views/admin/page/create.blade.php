@extends('admin.layouts.body_card')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ urlToAction('index') }}">{{ __('page.card_header.index') }}</a></li>
    <li class="breadcrumb-item active">{{ __('page.card_header.create') }}</li>
@endsection

@section('actions')
    <button type="button" class="btn btn-primary btn-sm shadow-sm js-btn-save-form">
        <i class="fas fa-save fa-sm fa-fw"></i> {{ __('app.save') }}
    </button>
@endsection

@section('content')
    {{ Form::open(['url' => urlToAction('store'), 'name' => 'entityForm']) }}
        @include ('admin.page._form')
    {{ Form::close() }}
@endsection
