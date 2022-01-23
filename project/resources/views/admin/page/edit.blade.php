@extends('admin.layouts.body_card')

@section('breadcrumbs')
    @include('admin.layouts.breadcrumbs', ['breadcrumbs' => [
        'index' => __('page.card_header.index'),
        'last' => __('page.card_header.edit'),
    ]])
@endsection

@section('actions')
    {{ Form::bsBtnSave(__('app.save')) }}
    {{ Form::bsBtnCreate() }}
    {{ Form::bsBtnShow($model) }}
    {{ Form::bsBtnDelete($model, true) }}
@endsection


@section('content')
    {{ Form::model($model, ['url' => urlToAction('update', $model), 'name' => 'entityForm', 'method' => 'PUT']) }}
        @include ('admin.page._form')
    {{ Form::close() }}
@endsection
