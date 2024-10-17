<x-layout>
<div class="container-fluid min-vh-100 containerDetailBook ">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 mt-3">
                <h1 class="text-center text-white display-4 text-shadow my-5">
                    <span class="fst-italic text-capitalize"> {{ $book['title'] }} </span>
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                @if ($book['cover'])
                <img class="imgDetail" src="{{ $book['cover'] }}" alt="">
                @endif
            </div>
            <div class="col-12 col-md-8">
                <h3 class="display-5 text-capitalize text-white-50"> Titolo originale: {{ $book['originalTitle'] }} </h3>
                <h4 class="display-5 mt-5 text-white-50">Data di uscita: {{ $book['releaseDate'] }}</h4>
                <h4 class="display-5 mt-5 text-white-50">Numero pagine: {{ $book['pages'] }}</h4>
                <h4 class="display-5 mt-5 text-white-50">Descrizione: {{ $book['description'] }}</h4>
            </div>
        </div>
    </div>
</x-layout>