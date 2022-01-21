@extends('admin.layouts.body_card')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.page.index') }}">Pages</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    {{ Form::open(['url' => urlToAction('store')]) }}
        @include ('admin.page._form')
    {{ Form::close() }}
@endsection
