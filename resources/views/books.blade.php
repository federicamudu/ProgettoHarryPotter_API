<x-layout>
    <div class="container-fluid containerBooks min-vh-100 pt-5">
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-md-8 display-4 text-white">
                Lista dei libri di Harry Potter
            </div>
        </div>

        <div class="row justify-content-center">

            @foreach ($books as $book)
            <div class="col-12 col-md-6 text-center">
                <div class="card shadow rounded py-5 mb-3 cardCustom">
                    <h4 class="card-title text-capitalize text-black">
                        Titolo: {{ $book['title'] }}
                    </h4>
                    <h5 class="card-text">Titolo originale: {{ $book['originalTitle'] }}</h5>
                    <h5 class="card-text">Data di uscita: {{ $book['releaseDate'] }}</h5>
                    <div class="text-center pt-3">
                        <a href="{{route('book.detail', ['index'=>$book['index']] )}}" class="btn btn-outline-dark">Dettaglio</a>
                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
</x-layout>