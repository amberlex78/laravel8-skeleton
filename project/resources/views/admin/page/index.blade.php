@extends('admin.layouts.body_card')

@php /** @var Page $item */ use App\Models\Page @endphp

@section('breadcrumbs')
    <li class="breadcrumb-item active">{{ __('page.card_header.index') }}</li>
@endsection

@section('actions')
    <a href="{{ urlToAction('create') }}" class="btn btn-outline-success btn-sm shadow-sm">
        <i class="fas fa-plus fa-sm fa-fw"></i> {{ __('page.card_header.create') }}
    </a>
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
                    {{-- Edit --}}
                    <a href="{{ urlToAction('edit', $item) }}" class="btn btn-outline-primary btn-sm">
                        <i class="fa fa-pen fa-fw fa-sm"></i>
                    </a>
                    {{-- Show --}}
                    <a href="{{ urlToAction('show', $item) }}" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-eye fa-sm fa-fw"></i>
                    </a>
                    {{-- Front --}}
                    <a href="#" class="btn btn-outline-success btn-sm" target="_blank">
                        <i class="fas fa-external-link-alt fa-fw fa-sm"></i>
                    </a>
                    {{-- Delete --}}
                    {{ Form::model($item, ['url' => urlToAction('destroy', $item), 'id' => 'form'.$item->id, 'method' => 'DELETE', 'class' => 'd-inline']) }}
                        <button type="button" class="btn btn-outline-danger btn-sm shadow-sm"
                                data-bs-toggle="modal" data-bs-target="#modalConfirmDelete"
                                data-entity-id="{{ $item->id }}">
                            <i class="fa fa-trash fa-fw fa-sm"></i>
                        </button>
                    {{ Form::close() }}
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
