@extends('Layout/Header')
@section('content')
@foreach ($proffesseurs as $proffesseur)
  <div class="card" style="width: 18rem;">
    <img src="{{$proffesseur->image}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Nom: {{$proffesseur->nom}}</p><br>
      <p class="card-text">Prenom: {{$proffesseur->prenom}}</p><br>
      <p class="card-text">Proffession: {{$proffesseur->proffession}}</p><br>
    </div>
  </div>
@endforeach

@endsection