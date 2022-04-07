@extends('layouts.template')

@section('content')
<div class="container">
    <h1 class="text-center">Informazioni annuncio</h1>

    <div class="card mx-auto text-center" style="width:30%;">
        <div class="card-body">
            <h5 class="card-title"> TITOLO : {{ $annuncio->titolo }} </h5>
            <p class="card-text">STATO : {{ $annuncio->stato }} </p>
            <p class="card-text">PREZZO : {{ $annuncio->prezzo }} </p>
            <p class="card-text">CHILOMETRAGGIO : {{ $annuncio->chilometraggio }} </p>
            <p class="card-text">IMMATRICOLAZIONE : {{ $annuncio->immatricolazione }} </p>
            <p class="card-text">POTENZA : {{ $annuncio->potenza }} </p>
            <p class="card-text">CILINDRATA : {{ $annuncio->cilindrata }} </p>
            <p class="card-text">COLORE : {{ $annuncio->colore }} </p>
            <p class="card-text">ALIMENTAZIONE : {{ $annuncio->alimentazione }} </p>
            <p class="card-text">CARROZZERIA : {{ $annuncio->carrozzeria }} </p>
            <p class="card-text">INDIRIZZO : {{ $annuncio->indirizzo }} </p>
            <p class="card-text">DESCRIZIONE : {{ $annuncio->descrizione }} </p>

        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">UTENTE CHE HA INSERITO : <span class="text-capitalize">{{ $annuncio->user->name }}</span></li>
            <li class="list-group-item">MODELLO ID : <span class="text-capitalize">{{ $annuncio->modello->nome }}</span> </li>
            <li class="list-group-item">COMUNE ID : <span class="text-capitalize">{{ $annuncio->comune->comune }}</span> </li>
            <li class="list-group-item">CREATO IL : <span class="text-capitalize">{{ $annuncio->created_at }}</span> </li>
            {{--@if ($annuncio->immagine!=null)
                <li class="list-group-item"><img style="max-width:250px;" src="/storage/immagini/{{$annuncio->immagine}}"></li>
            @endif
            <li class="list-group-item"><a href="{{ route('annunci.createcomments', $annuncio->id) }}">Commenta il post</a></li>--}}
        </ul>
        

    </div>

    <!--<h3 class="text-center">Commenti</h3>
        <div class="container-fluid mt-3">-->
            {{--@php
                $c=true;
            @endphp

            @foreach ($comments as $comment)
                @if ($c===true)
                    <h3 class="text-center mt-3">Commenti</h3>
                @endif
                <div class="my-3 d-flex justify-content-around">
                    <h4>{{App\Models\User::find($comment->user_id)->name }}</h4>
                    <p>{{$comment->testo}}</p>
                    @if (Illuminate\Support\Facades\Auth::id()===$comment->user_id) 
                        <a href="{{ route('posts.deletecomments', $comment) }}">Elimina Commento</a> 
                    @endif
                </div>    
                <br>
                @php
                    $c=false;
                @endphp
            @endforeach
--}}
</div>
@endsection