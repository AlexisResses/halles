@extends('layout')

@section('content')
    <div class="container" id="containerContent">
      <h2 class="text-center">Contact</h2>
      <div class="mb-3 text-center">
        <p>
          Vous pouvez joindre notre équipe par téléphone au : 0606060606 pendant les horaires d'ouvertures. 
        </p>
        <button href="{{ url('/localisation')}}" class="btn btn-primary">Voir les horaires</button>
      </div>
        <form action="/contact" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom"
                    value="{{ old('name') }}">
                @error('name')
                <div class="alert alert-danger">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse mail"
                    value="{{ old('email') }}">
                @error('email')
                <div class="alert alert-danger">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Numéro de téléphone</label>
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Votre numéro de téléphone"
                    value="{{ old('phone') }}">
                @error('phone')
                <div class="alert alert-danger">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="demand" class="form-label">Votre demande</label>
                <textarea class="form-control" name="demand" id="demand" rows="6" value="{{ old('demand') }}"></textarea>
                @error('demand')
                <div class="alert alert-danger">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </form>
    </div>
@endsection
