@extends('admin.layouts.body_card')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ urlToAction('index') }}">{{ __('page.card_header.index') }}</a></li>
    <li class="breadcrumb-item active">{{ __('page.card_header.create') }}</li>
@endsection

@section('content')
    {{ Form::open(['url' => urlToAction('store')]) }}
        @include ('admin.page._form')
    {{ Form::close() }}
@endsection
