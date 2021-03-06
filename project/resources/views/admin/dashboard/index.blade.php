@extends('admin.layouts.body')

@section('content')
    <div class="row">
        <div class="col-lg-5">
            <div class="card mb-4">
                <div class="card-header">
                    <p class="lead mb-0"><i class="fas fa-fw fa-copy fa-fw me-1"></i> {{ __('page.sidenav_title') }}</p>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.page.create') }}" class="btn btn-outline-success btn-block btn-sm my-1">
                        <i class="fas fa-plus fa-sm fa-fw me-1"></i> {{ __('page.card_header.create') }}
                    </a>
                    <a href="{{ route('admin.page.index') }}" class="btn btn-outline-secondary btn-block btn-sm my-1">
                        <i class="fas fa-list fa-sm fa-fw me-1"></i> {{ __('page.card_header.index') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <p class="lead mb-0"><i class="fas fa-info-circle fa-fw me-1"></i> About SB Admin Template</p>
                </div>
                <div class="card-body">
                    <p>
                        <a href="https://startbootstrap.com/template/sb-admin" target="_blank">SB Admin</a>
                        is an open source, admin dashboard template for
                        <a href="https://getbootstrap.com" target="_blank">Bootstrap</a>
                        created by <a href="https://startbootstrap.com" target="_blank">Start Bootstrap.</a>
                    </p>
                    <p>
                        Start Bootstrap is an open source library of free Bootstrap templates and themes. All
                        of the free templates and themes on Start Bootstrap are released under the MIT
                        license, which means you can use them for any purpose, even for commercial
                        projects.
                    </p>
                    <p>
                        <a href="https://github.com/StartBootstrap/startbootstrap-sb-admin" target="_blank">
                            Start Bootstrap - SB Admin
                            <small><i class="fas fa-fw fa-external-link-alt"></i></small>
                        </a>
                    </p>
                    <p>
                        <a href="https://startbootstrap.github.io/startbootstrap-sb-admin" target="_blank">
                            Start Bootstrap - Dashboard Example
                            <small><i class="fas fa-fw fa-external-link-alt"></i></small>
                        </a>
                    </p>
                    <p>
                        <a href="https://fontawesome.com/v5.15/icons?d=gallery&p=2&m=free" target="_blank">
                            Font Awesome Icons
                            <small><i class="fas fa-fw fa-external-link-alt"></i></small>
                        </a>
                    </p>
                </div>
            </div>
            <div class="card shadow-sm">
                <div class="card-header">
                    <p class="lead mb-0"><i class="fas fa-info-circle fa-fw me-1"></i> System info</p>
                </div>
                <div class="card-body">
                    <p>Laravel v{{ app()->version() }}</p>
                    <span>PHP v{{ PHP_VERSION }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
