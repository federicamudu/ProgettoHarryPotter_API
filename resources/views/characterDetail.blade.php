<x-layout>
<div class="container-fluid min-vh-100 containerDetailCharacter ">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 mt-3">
                <a class="btn btn-outline-light mt-5" href="{{route('characters')}}" id="btnBack"><</a>
                <h1 class="text-center text-black display-4 text-shadow my-5">
                    Dettaglio di <span class="fst-italic text-capitalize"> {{ $character['fullName'] }} </span>
                </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 d-flex justify-content-center">
                @if ($character['image'])
                <img class="imgDetail" src="{{ $character['image'] }}" alt="">
                @endif
            </div>
            <div class="col-12 col-md-8">
                <h3 class="display-5 text-capitalize text-black-50"> Nickname: {{ $character['nickname'] }} </h3>
                <h4 class="display-5 mt-5 text-black-50">Casata di appartenenza: {{ $character['hogwartsHouse'] }}</h4>
                <h4 class="display-5 mt-5 text-black-50">Data di nascita: {{ $character['birthdate'] }}</h4>
                <h4 class="display-5 mt-5 text-black-50">Interprete: {{ $character['interpretedBy'] }}</h4>
            </div>
        </div>
    </div>
    
</x-layout>