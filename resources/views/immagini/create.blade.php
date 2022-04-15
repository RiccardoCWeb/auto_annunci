@extends('layouts.template')

@section('content')
<div class="col-12 mx-auto">
    <h1 class="text-center">Inserisci immagini annuncio {{$id}}</h1>
    <h4 class="text-center"><a href="{{ route('annunci.show', $id) }}">Fine</a></h4>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form method="POST" action="{{ route('immagini.store', $id) }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 col-9 mx-auto">
            <label for="formFile" class="form-label">Inserisci Immagine</label>
            <input class="form-control" type="file" id="formFile" name="immagine">
        </div>
        <div class="mb-3 form-check col-9 mx-auto text-center" style="padding-left:0!important;">
            <button type="submit" class="btn btn-primary">Salva</button>
        </div>
    </form>


    @if ($immagini!=null)
        <div class="container">
            <h3 class="w-100 text-center mb-3">Immagini già inserite</h3>
            <ul class="d-flex justify-content-evenly flex-wrap">
                @foreach ($immagini as $immagine)
                    <li class="list-group-item text-center mb-3"><img class="mb-3" style="max-width:500px;" src="/storage/immagini/{{$immagine->immagine}}">
                        <br><a class="btn btn-primary" href="{{ route('immagini.delete', $immagine->immagine) }}">Elimina Immagine</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

</div>   




@endsection