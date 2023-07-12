<div class="toast bg-dark-light" role="alert" aria-live="assertive" aria-atomic="true" data-delay="1000">
    <div class="toast-header">
        <img src="..." class="rounded mr-2" alt="...">
        <strong class="mr-auto">@yield('toast-provider')</strong>
        <small class="text-muted">@yield('toast-time')</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        @yield('toast-message')
    </div>
</div>
