@extends('layout')

@section('content')
<div class="text-center my-5">
    <h1>Espace administrateur</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
    
        <x-jet-dropdown-link class="btn btn-danger" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                        this.closest('form').submit();">
            Déconnexion
        </x-jet-dropdown-link>
    </form>
</div>
<div class="row justify-content-center">
    @foreach ($contacts as $contact)
        <div class="col-md-6">
            <div class="card my-3 m-3">
                <h3 class="text-center">Numéro de la demande {{$contact->id}}</h3>
                <div class="card-body">
                    <button>
                        <a class="btn btn-info" href="{{ route('contact', $contact->id) }}">Voir la demande</a>
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection