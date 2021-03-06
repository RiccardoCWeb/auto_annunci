@extends('layouts.template')

@section('content')

<div class="jumbotron">
    <h1 class="display-4">Annunci Auto!</h1>
    <p class="lead">Questa è una semplice app di esempio costruita con Laravel</p>
    <hr class="my-4">
    <p>Annunci Auto</p>

</div>
@auth
<h3>Ciao {{ Auth::user()->name }} </h3>
<h4> 
    @if (DB::table('recensioni')->where('user_id', Auth::id())->exists())
    La tua valutazione media è di: {{ number_format(DB::table('recensioni')->where('user_id', Auth::id())->avg('valutazione'), '2');}}/5.
    
    @else
    Nessuno ha valutato il tuo account!
    Pubblica degli annunci per ricevere recensioni dagli altri utenti.
    @endif</h4>
@endauth

</div>

<div class="container w-100">
    @foreach ($annunci as $annuncio)
        <div class="card m-2" style="width:45%; float:left;">
            <div class="card-body">
                <h5 class="card-title"><a href="{{ route('annunci.show', $annuncio->id) }}"> {{ $annuncio->titolo }}</a></h5>
                <h6>Modello: {{ $annuncio->modello->nome }} <br> Marca: {{ $annuncio->modello->marca->nome }} <br> {{ $annuncio->prezzo }} €</h6>
                <div style="margin: 10px 0; display:block;">
                    @if ($annuncio->immagini!=null)
                    
                        @foreach ($annuncio->immagini as $img)
                            <img style="max-height:100px; " src="/storage/immagini/{{$img->immagine}}">
                        @endforeach
                    @endif
                </div>

                <h6 class="card-subtitle mb-2 text-muted">Inserito da {{ $annuncio->user->name }}</h6>
            </div>
        </div>
    @endforeach
    
</div>
<div class="container w-100">
    <div>{{$annunci->links()}}</div>
</div>

@endsection