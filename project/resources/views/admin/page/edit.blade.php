@extends('admin.layouts.body_card')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.page.index') }}">Pages</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
    <div class="col-lg">
        {{ Form::model($model, ['method' => 'PUT', 'url' => urlToAction('update', $model)]) }}
            @include ('admin.page._form')
        {{ Form::close() }}
    </div>
@endsection
