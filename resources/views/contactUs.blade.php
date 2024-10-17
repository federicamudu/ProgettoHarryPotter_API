<x-layout>
    <div class="container-fluid containerContact min-vh-100 pt-5">
        <div class="row align-items-center justify-content-center my-5">
            <div class="col-12 col-md-6 display-4 text-white">
                Contattaci
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('contact.submit')}}" method="POST" class="p-5 rounded shadow bg-secondary-subtle">
                    @if (session('mailSuccess'))
                    <div class="alert alert-success text-center">
                        {{ session('mailSuccess') }}
                    </div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome completo</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Il tuo messaggio</label>
                        <textarea id="message" name="message" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-dark">Invia</button>
                    </div>
                </form>
            </div>
        </div>


</x-layout>