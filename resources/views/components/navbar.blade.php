<nav class="navbar navbar-expand-lg fixed-top navbarCustom">
    <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('welcome') }}"><img class="logoNav" src="/media/favpng_magic-in-harry-potter-logo-desktop-wallpaper.png" alt=""></a>
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link mx-2 text-white" href="{{route('characters')}}"><i class="bi bi-person-circle pe-2"></i>Personaggi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-white" href="{{route('books')}}"><i class="bi bi-book pe-2"></i>Libri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-white" href="{{route('spells')}}"><i class="bi bi-magic pe-2"></i>Incantesimi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 text-white" href="{{route('contact.us')}}"><i class="bi bi-pencil-square pe-2"></i>Contattaci</a>
                </li>
            </ul>
        </div>
    </div>
</nav>