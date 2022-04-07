@extends('adminlte::page')

@section('title', 'Utenti')

@section('content_header')
    <h1>Tutti gli utenti</h1>
@stop

@section('content')
<table class="table table-bordered table-striped datat">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Ruolo</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td> {{$user->role->name }}
                </td>
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

