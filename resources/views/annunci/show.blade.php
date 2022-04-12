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
            <li class="list-group-item">MODELLO : <span class="text-capitalize">{{ $annuncio->modello->nome }}</span> </li>
            <li class="list-group-item">MARCA : <span class="text-capitalize">{{ $annuncio->modello->marca->nome }}</span> </li>
            <li class="list-group-item">COMUNE : <span class="text-capitalize">{{ $annuncio->comune->comune }}</span> </li>
            <li class="list-group-item">CREATO IL : <span class="text-capitalize">{{ $annuncio->created_at }}</span> </li>
            <li class="list-group-item">INSERITO DA: 
                <span class="text-capitalize">{{ $annuncio->user->name }}</span>
                <form method="POST" action="{{ route('recensioni.store', $annuncio->user_id) }}" >
                    @csrf
                    <div class="mt-2 col-12">
                        <label for="valutazione" class="formlabel text-uppercase">Recensisci l'utente</label>
                        <input type="number" min="1" max="5" class="form-control mt-2" id="val" name="val" placeholder="Recensisci l'utente con un voto da 1 a 5" required>
                    </div>
                    <div class="mt-2 form-check col-9 mx-auto">
                        <button type="submit" class="btn btn-primary">Invia Recensione</button>
                    </div>
                </form>
            </li>
            @if ($annuncio->dettaglio)
            <li class="list-group-item">
                <h1>Dettagli</h1>
            </li>
            <li class="list-group-item">
                PROPRIETARI : <span class="text-capitalize">{{ $annuncio->dettaglio->proprietari }}</span> 
            </li>
            <li class="list-group-item">
                CAMBIO : <span class="text-capitalize">{{ $annuncio->dettaglio->cambio }}</span> 
            </li>
            <li class="list-group-item">
                VERNICE : <span class="text-capitalize">{{ $annuncio->dettaglio->vernice }}</span> 
            </li>
            <li class="list-group-item">
                RIVESTIMENTI : <span class="text-capitalize">{{ $annuncio->dettaglio->rivestimenti }}</span> 
            </li>
            <li class="list-group-item">
                POSTI : <span class="text-capitalize">{{ $annuncio->dettaglio->posti }}</span> 
            </li>
            <li class="list-group-item">
                PORTE : <span class="text-capitalize">{{ $annuncio->dettaglio->porte }}</span> 
            </li>
            <li class="list-group-item">
                CONSUMI : <span class="text-capitalize">{{ $annuncio->dettaglio->consumi }}</span> 
            </li>
            <li class="list-group-item">
                EMISSIONI : <span class="text-capitalize">{{ $annuncio->dettaglio->emissioni }}</span> 
            </li>
            <li class="list-group-item">
                EQUIPAGGIAMENTO : <span class="text-capitalize">{{ $annuncio->dettaglio->equipaggiamento }}</span> 
            </li>
            @else
            <li class="list-group-item">
                <h5>Non ci sono ulteriori dettagli inseriti per questo annuncio</h5>
            </li>
            @endif
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