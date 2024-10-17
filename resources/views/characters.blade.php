<x-layout>
    <div class="container-fluid containerCharacters min-vh-100 pt-5">
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-md-8 display-5 text-white">
                Lista dei personaggi di Harry Potter
            </div>
        </div>

        <div class="row justify-content-center scrollspy-example divScrollabile" data-bs-spy="scroll" data-bs-smooth-scroll="true" tabindex="0">

            @foreach ($characters as $character)
            <div class="col-12 col-md-3 text-center ">
                <div class="card shadow rounded py-5 mb-3 cardCustom">
                    <h5 class="card-title text-capitalize text-black">
                        Nome: {{ $character['fullName'] }}
                    </h5>
                    <div class="text-center">
                        <a href="{{route('character.detail', ['index'=>$character['index']] )}}" class="btn btn-outline-dark">Dettaglio</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</x-layout>