@extends('layouts.template')

@section('content')
<div class="col-12 mx-auto">
    <h1 class="text-center">Inserisci immagini annuncio {{$id}}</h1>
{{--
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form method="POST" action="{{ route('dettagli.store', $id) }}" >
        @csrf

        <div class="d-flex col-9 justify-content-between mx-auto">
            <div class="mb-3 col-12 col-md-5">
                <label for="proprietari" class="formlabel text-capitalize">Numero Proprietari</label>
                <input type="number" min="1" class="form-control" id="proprietari" name="proprietari" placeholder="Min 1">
            </div>
            
            <div class="mb-3 col-12 col-md-5">
                <label for="cambio" class="form-label text-capitalize">cambio</label>
                <input type="text" step="0.01" class="form-control" id="cambio" name="cambio" placeholder="Manuale/Automatico">
            </div>
        </div>
        <div class="d-flex col-9 justify-content-between mx-auto">
            <div class="mb-3 col-12 col-md-5">
                <label for="vernice" class="form-label text-capitalize">vernice</label>
                <input type="text" class="form-control" id="vernice" name="vernice">
            </div>
            <div class="mb-3 col-12 col-md-5">
                <label for="rivestimenti" class="form-label text-capitalize">rivestimenti</label>
                <input type="text" class="form-control" id="rivestimenti" name="rivestimenti">
            </div>
            
        </div>
        <div class="d-flex col-9 justify-content-between mx-auto">
            <div class="mb-3 col-12 col-md-5">
                <label for="posti" class="formlabel text-capitalize">posti</label>
                <input type="number" class="form-control" id="posti" name="posti">
            </div>
            <div class="mb-3 col-12 col-md-5">
                <label for="porte" class="formlabel text-capitalize">porte</label>
                <input type="number" class="form-control" id="porte" name="porte">
            </div>
        </div>
        <div class="d-flex col-9 justify-content-between mx-auto">
            <div class="mb-3 col-12 col-md-5">
                <label for="consumi" class="form-label text-capitalize">consumi</label>
                <input type="text" class="form-control" id="consumi" name="consumi" placeholder="Consumi...">
            </div>
            <div class="mb-3 col-12 col-md-5">
                <label for="emissioni" class="form-label text-capitalize">emissioni</label>
                <input type="text" class="form-control" id="emissioni" name="emissioni" placeholder="Emissioni...">
            </div>
        </div>
        <div class="mb-3 col-9 mx-auto">
            <label for="equipaggiamento" class="form-label text-capitalize">equipaggiamento</label>
            <textarea class="form-control" placeholder="Scrivi qui..." name="equipaggiamento" id="equipaggiamento" rows="8" style="resize:none;"></textarea>
        </div>
        
        <div class="mb-3 form-check col-9 mx-auto text-center" style="padding-left:0!important;">
            <button type="submit" class="btn btn-primary">Continua</button>
        </div>
    </form>--}}
</div>   




@endsection