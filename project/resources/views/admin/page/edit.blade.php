@extends('admin.layouts.body_card')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ urlToAction('index') }}">{{ __('page.card_header.index') }}</a></li>
    <li class="breadcrumb-item active">{{ __('page.card_header.edit') }}</li>
@endsection

@section('content')
    {{ Form::model($model, ['method' => 'PUT', 'url' => urlToAction('update', $model)]) }}
        @include ('admin.page._form')
    {{ Form::close() }}
@endsection
