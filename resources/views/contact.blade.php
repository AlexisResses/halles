@extends('layout')

@section('content')
    <div class="container" id="containerContent">
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" placeholder="Votre nom" value="{{ old('name')}}">
              </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Mail</label>
                <input type="email" class="form-control" id="email" placeholder="Votre adresse mail" value="{{ old('email')}}">
              </div>
              <div class="mb-3">
                <label for="demande" class="form-label">Votre demande</label>
                <textarea class="form-control" id="demande" rows="6" value="{{ old('demande')}}"></textarea>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit">Envoyer</button>
              </div>
        </form>
    </div>
@endsection