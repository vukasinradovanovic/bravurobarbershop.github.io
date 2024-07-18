<nav class="navbar navbar-expand-lg text-center text-animation">
    <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
        <ul class="navbar-nav">
        @foreach(trans('nav') as $route => $label)
            <li class="nav-item p-2">
                <a class="nav-link link-body-emphasis {{ request()->routeIs($route) ? 'active' : '' }}" href="{{ route($route, ['locale' => App::getLocale()]) }}">{{ $label }}</a>
            </li>
        @endforeach
        </ul>
    </div>
</nav>