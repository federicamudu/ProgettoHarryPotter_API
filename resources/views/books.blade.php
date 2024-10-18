<x-layout>
    <div class="containerBooks min-vh-100">
        <div class="container-fluid  pt-5">
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
                            <a href="{{route('book.detail', ['index'=>$book['index']] )}}" class="btn btn-outline-dark btnDetail">Dettaglio</a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function() {
            let previousURL = document.referrer;
            let splitted = previousURL.split('/')
            splitted.pop()
            let url = splitted.join('/')
            console.log(url);

            if (url == 'http://127.0.0.1:8000/libri/dettaglio') {
                window.scrollTo(0, localStorage.getItem('scrolledPosition'))
                console.log('ci sono');
            }
        })
    </script>
</x-layout>