<x-layout>
    <div class="containerSpells min-vh-100">
        <div class="container-fluid  pt-5">
            <div class="row align-items-center justify-content-center my-5">
                <div class="col-12 col-md-8 display-4 text-white">
                    Lista di Incantesimi
                </div>


                <div class="row justify-content-center scrollspy-example divScrollabile" data-bs-spy="scroll" data-bs-smooth-scroll="true" tabindex="0">

                    @foreach ($spells as $spell)
                    <div class="col-12 col-md-6 text-center">
                        <div class="card shadow rounded py-5 mb-3 cardCustom">
                            <h4 class="card-title text-capitalize text-black">
                                Nome: {{ $spell['spell'] }}
                            </h4>
                            <h5 class="card-text">Utilizzo: {{ $spell['use'] }}</h5>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-layout>