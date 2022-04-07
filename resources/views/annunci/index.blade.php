@extends('layouts.template')

@section('content')
    @if (Session::has('msg'))
        <div class="alert alert-success" role="alert">
            {{Session::get('msg')}}
        </div>
    @endif
    <h1>I Tuoi Annunci</h1>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Titolo</th>
            <th>Data Inserimento</th>
            <th colspan="2">Azioni</th>
        </tr>
        @foreach ($annunci as $annuncio)
        <tr>            
            <td><a href="{{ route('annunci.show', $annuncio->id) }}">{{ $annuncio->titolo }}</a></td>
            <td>{{ $annuncio->created_at }}</td>
            <td><a href="{{ route('annunci.edit', $annuncio->id) }}">Modifica</a></td>
            <td><a href="{{ route('annunci.delete', $annuncio->id) }}">Elimina</a></td>

        </tr>

        @endforeach
    </table>

        {{-- $posts->links() --}} {{-- crea la sezione con le pagine e i tasti avanti e indietro --}}

        <a href="{{ route('annunci.create') }}">Crea Nuovo Annuncio</a><br />


@endsection