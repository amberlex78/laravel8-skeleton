<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <a class="nav-link{{ Route::currentRouteName() === 'admin.dashboard' ? ' active' : '' }}" href="{{ route('admin.dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-tachometer-alt"></i></div>
                {{ __('app.dashboard') }}
            </a>
            <a class="nav-link{{ Str::is('admin.page.*', Route::currentRouteName()) ? ' active' : '' }}" href="{{ route('admin.page.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-fw fa-copy"></i></div>
                {{ __('page.sidenav_title') }}
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Logged Username
    </div>
</nav>
