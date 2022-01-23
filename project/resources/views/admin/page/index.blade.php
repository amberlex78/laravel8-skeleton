@extends('admin.layouts.body_card')

@php /** @var Page $item */ use App\Models\Page @endphp

@section('breadcrumbs')
    @include('admin.layouts.breadcrumbs', ['breadcrumbs' => [
        'last' => __('page.card_header.index'),
    ]])
@endsection

@section('actions')
    {{ Form::bsBtnCreate(__('page.card_header.create')) }}
@endsection

@section('content')
    <table class="table table-striped table-hover table-responsive">
        <thead>
        <tr>
            <th>{{ __('page.field.id') }}</th>
            <th>{{ __('page.field.title') }}</th>
            <th>{{ __('app.slug') }}</th>
            <th>{{ __('page.field.is_active') }}</th>
            <th>{{ __('app.created_at') }}</th>
            <th>{{ __('app.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($model as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->slug }}</td>
                <td>
                    <div class="form-check form-switch">
                        <label>
                            {{ Form::checkbox('is_active', null, $item->is_active, [
                                'data-url' => route('admin.ajax.booleanChange', ['id' => $item->id]),
                                'data-model' => \App\Models\Page::class,
                                'class' => 'form-check-input js-checkbox-status',
                                'style' => 'cursor: pointer',
                            ]) }}
                        </label>
                    </div>
                </td>
                <td>{{ $item->created_at->format('d-m-Y, H:i:s') }}</td>
                <td>
                    {{ Form::bsBtnEdit($item) }}
                    {{ Form::bsBtnShow($item) }}
                    {{ Form::bsBtnFront('#') }}
                    {{ Form::bsBtnDelete($item, false) }}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">{{ __('no_records_found') }}</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    @include('admin.embed.modal.confirm_delete')
@endsection
