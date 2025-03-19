<header>
    <div class="text-bg-primary ">
        <div class="header p-2 d-flex justify-content-between align-items-center">
            <h2>
                {{ $slot }}
            </h2>
            @if (Request::is('read', 'items'))
                <a href="/create" class="btn btn-dark gap-10">Create stock</a>
            @endif

        </div>
    </div>
</header>
