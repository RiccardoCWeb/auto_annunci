@extends('layouts.template')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Annunci Auto!</h1>
    <p class="lead">Questa è una semplice app di esempio costruita con Laravel</p>
    <hr class="my-4">
    <p>Annunci Auto</p>

</div>
@auth
<h3>Ciao {{ Auth::user()->name }} </h2>
@endauth

</div>
@endsection