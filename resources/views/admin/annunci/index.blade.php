@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Tutti gli annunci</h1>
@stop

@section('content')
<table class="table table-bordered table-striped datat">
    <thead>
        <th>Titolo</th>
        <th>Creato il</th>
        <th>Creato da</th>
    </thead>
    <tbody>
        @foreach ($annunci as $annuncio)
            <tr>
                <td>{{ $annuncio->titolo }}</td>
                <td>{{ $annuncio->created_at }}</td>
                <td>{{ $annuncio->user->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@stop
@section('js')
    <script>
        $(document).ready( function () {
            $('.datat').DataTable();
        } );
    </script>
@stop
@section('footer')
    Powered by Infobasic
@stop

