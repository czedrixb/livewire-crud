<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Link</a>
                    </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link text-white disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>

            @auth
                <button wire:click="logout" class="btn btn-danger btn-sm">Logout</button>
            @endauth
        </div>
    </div>
</nav>
