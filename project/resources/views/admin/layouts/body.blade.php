@extends('admin.layouts.app')

@section('body')
    @include('admin.embed.navbar')
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include('admin.embed.sidebar')
        </div>
        <div id="layoutSidenav_content">
            <main class="container-fluid px-4 mt-4 mb-4">
                <div class="row">
                    <div class="col-lg">
                        @include('admin.embed.message')
                        @yield('content')
                    </div>
                </div>
            </main>
            <footer class="mt-auto py-4 bg-light">
                <div class="container-fluid px-4">
                    @include('admin.embed.footer')
                </div>
            </footer>
        </div>
    </div>
@endsection
