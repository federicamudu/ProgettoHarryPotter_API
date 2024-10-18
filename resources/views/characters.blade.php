<x-layout>
    <div class="containerCharacters min-vh-100">
        <div class="container-fluid pt-5">
            <div class="row align-items-center justify-content-center my-5">
                <div class="col-12 col-md-8 display-5 text-white">
                    Lista dei personaggi di Harry Potter
                </div>
            </div>

            <div class="row justify-content-center">

                @foreach ($characters as $character)
                <div class="col-12 col-md-3 text-center ">
                    <div class="card shadow rounded py-5 mb-3 cardCustom">
                        <h5 class="card-title text-capitalize text-black">
                            Nome: {{ $character['fullName'] }}
                        </h5>
                        <div class="text-center">
                            <a href="{{route('character.detail', ['index'=>$character['index']] )}}" class="btn btn-outline-dark btnDetail">Dettaglio</a>
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

            if (url == 'http://127.0.0.1:8000/personaggi/dettaglio') {
                window.scrollTo(0, localStorage.getItem('scrolledPosition'))
                console.log('ci sono');
            }
        })
    </script>
</x-layout>