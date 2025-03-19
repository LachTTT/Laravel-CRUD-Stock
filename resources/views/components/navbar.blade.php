<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <!-- Brand and Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="/img/alamak.jpg" alt="alamak" style="width: 30px; height: 30px;" class="me-2">
            <span>Stockx</span>
        </a>
        <!-- Toggle button for responsive design -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- View page link -->
                <li class="nav-item">
                    <a class="nav-link" href="/read">View</a>
                </li>
            </ul>
            @if (Request::is('read', 'items'))
                <form class="d-flex" role="search" action="{{ route('items.index') }}" method="GET">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search"
                        aria-label="Search" value="{{ request('search') }}">
                    <button class="btn btn-outline-success" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
            @endif
        </div>
    </div>
</nav>
