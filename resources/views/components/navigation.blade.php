<nav class="border-b bg-white">
    <div class="mx-auto flex min-h-11 max-w-7xl items-center gap-4 px-4">
        <a href="/" class="font-bold">
            Kantin
        </a>

        @auth
            @if (auth()->user()->role === 'admin')
                <a href="{{ route('admin.dashboard') }}">
                    Admin
                </a>
            @endif

            @if (auth()->user()->role === 'tenant')
                <a href="{{ route('tenant.dashboard', ['tenant' => 'test']) }}">
                    Tenant
                </a>
            @endif
        @endauth
    </div>
</nav>