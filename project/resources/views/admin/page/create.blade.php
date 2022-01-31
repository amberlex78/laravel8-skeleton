@extends('admin.layouts.body_card')

@section('breadcrumbs')
    @include('admin.embed.breadcrumbs', ['breadcrumbs' => [
        'index' => __('page.card_header.index'),
        'last' => __('page.card_header.create'),
    ]])
@endsection

@section('actions')
    {{ Form::bsBtnSave(__('app.save')) }}
@endsection

@section('content')
    {{ Form::open(['url' => urlToAction('store'), 'name' => 'entityForm']) }}
        @include ('admin.page._form')
    {{ Form::close() }}
@endsection
