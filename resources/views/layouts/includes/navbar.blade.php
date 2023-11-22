<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Tableau de bord</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @php
            $route = request()->route()->getName();   
        @endphp
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a @class(['nav-link', 'active' => str_contains($route, 'products.')]) href="{{ route('products.index') }}">Gérer les produits</a>
                </li>
            </ul>

            <div class="ms-auto">
                @auth
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <form action="{{ route('logout.destroy') }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                {!! danger_outline_btn('Se deconnecter') !!}
                            </form>
                        </li>
                    </ul>
                @endauth
            </div>

        </div>
    </div>
</nav>
