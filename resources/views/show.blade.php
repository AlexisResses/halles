@extends('layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card my-3 m-3">
                <form action="{{route('delete', $contact->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <h3 class="text-center">Numéro de la demande {{ $contact->id }}</h3>
                    <div class="card-body">
                        <h2 class="card-title">Nom : {{ $contact->name }}</h2>
                        <h4 class="card-text">Numéro de téléphone : {{ $contact->phone }}</h4>
                        <h4 class="card-text">Email : {{ $contact->email }}</h4>
                        <p class="card-text">Demande reçu : {{ $contact->demand }}</p>
                        <button type="submit" class="btn btn-warning">Supprimer la demande</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
