@extends('admin.layouts.body_card')

@php /** @var Page $model */ use App\Models\Page @endphp

@section('breadcrumbs')
    @include('admin.embed.breadcrumbs', ['breadcrumbs' => [
        'index' => __('page.card_header.index'),
        'last' => __('page.card_header.show'),
    ]])
@endsection

@section('actions')
    {{ Form::bsBtnCreate() }}
    {{ Form::bsBtnEdit($model) }}
    {{ Form::bsBtnDelete($model, true) }}
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
