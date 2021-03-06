@extends('layouts.template')

@section('content')
    <div class="col-12 mx-auto">
        <h1>Modifica l'annuncio</h1>
        <form method="POST" action="{{ route('annunci.update', $annuncio->id) }}" >
            @csrf
            
            <div class="d-flex col-9 justify-content-between mx-auto">
                
                <div class="mb-3 col-12">
                    <label for="titolo" class="formlabel text-capitalize">titolo</label>
                    <input type="text" class="form-control" id="titolo" name="titolo" placeholder="Titolo..." value="{{$annuncio->titolo}}">
                </div>
                
            </div>
            <div class="d-flex col-9 justify-content-between mx-auto">
                <div class="mb-3 col-12 col-md-5">
                    <label for="prezzo" class="form-label text-capitalize">prezzo</label>
                    <input type="number" step="0.01" class="form-control" id="prezzo" name="prezzo" placeholder="nn.nnn,nn" value="{{$annuncio->prezzo}}">
                </div>
                <div class="mb-3 col-12 col-md-5">
                    <label for="chilometraggio" class="form-label text-capitalize">chilometraggio</label>
                    <input type="number" class="form-control" id="chilometraggio" name="chilometraggio" placeholder="nnnnn (km)" value="{{$annuncio->chilometraggio}}">
                </div>
            </div>
            <div class="d-flex col-9 justify-content-between mx-auto">
                <div class="mb-3 col-12 col-md-5">
                    <label for="immatricolazione" class="form-label text-capitalize">anno immatricolazione</label>
                    <input type="date" class="form-control" id="immatricolazione" name="immatricolazione" value="{{$annuncio->immatricolazione}}">
                </div>
                <div class="mb-3 col-12 col-md-5">
                    <label for="potenza" class="form-label text-capitalize">potenza</label>
                    <input type="text" class="form-control" id="potenza" name="potenza" placeholder="nn" value="{{$annuncio->potenza}}">
                </div>
                
            </div>
            <div class="d-flex col-9 justify-content-between mx-auto">
                <div class="mb-3 col-12 col-md-5">
                    <label for="cilindrata" class="form-label text-capitalize">cilindrata</label>
                    <input type="text" class="form-control" id="cilindrata" name="cilindrata" placeholder="nnnn" value="{{$annuncio->cilindrata}}">
                </div>
                <div class="mb-3 col-12 col-md-5">
                    <label for="colore" class="form-label text-capitalize">colore</label>
                    <input type="text" class="form-control" id="colore" name="colore" placeholder="Colore..." value="{{$annuncio->colore}}">
                </div>
            </div>
            <div class="d-flex col-9 justify-content-between mx-auto">
                <div class="mb-3 col-12 col-md-5">
                    <label for="alimentazione" class="form-label text-capitalize">alimentazione</label>
                    <input type="text" class="form-control" id="alimentazione" name="alimentazione" placeholder="Alimentazione..." value="{{$annuncio->alimentazione}}">
                </div>
                <div class="mb-3 col-12 col-md-5">
                    <label for="carrozzeria" class="form-label text-capitalize">carrozzeria</label>
                    <input type="text" class="form-control" id="carrozzeria" name="carrozzeria" placeholder="Carrozzeria..." value="{{$annuncio->carrozzeria}}">
                </div>
            </div>
            <div class="d-flex col-9 justify-content-between mx-auto">
                <div class="mb-3 col-12 col-md-5">
                    <label for="indirizzo" class="form-label text-capitalize">indirizzo</label>
                    <input type="text" class="form-control" id="indirizzo" name="indirizzo" placeholder="Via ---, x" value="{{$annuncio->indirizzo}}">
                </div>
                <div class="mb-3 col-12 col-md-5">
                    <label for="comune" class="form-label text-capitalize">Comune</label>
                    <select class="form-select" aria-label="Default select example" name="comune" id="comune">
                        <option>Scegli il comune</option>
                        @foreach ($comuni as $comune)
                            @if ($comune->id===$annuncio->comune_id)
                                <option value="{{$comune->id}}" selected>{{$comune->comune}} ({{$comune->provincia}}), {{$comune->regione}}</option>
                            @else
                                <option value="{{$comune->id}}">{{$comune->comune}} ({{$comune->provincia}}), {{$comune->regione}}</option>
                            @endif 
                        @endforeach
                      </select>          
                </div>
            </div>
            <div class="d-flex col-9 justify-content-between mx-auto">
                <div class="mb-3 col-12 col-md-5">
                    <label for="modello" class="form-label text-capitalize">Modello</label>
                    <select class="form-select" aria-label="Default select example" name="modello" id="modello">
                        <option>Scegli il modello</option>
                        @foreach ($marche as $marca)
                            <optgroup label="{{$marca->nome}}">
                                @foreach ($modelli as $modello)
                                    @if($modello->marca_id===$marca->id)
                                        @if ($modello->id===$annuncio->modello_id)
                                            <option value="{{$modello->id}}" selected>{{$modello->nome}}</option>
                                        @else
                                            <option value="{{$modello->id}}">{{$modello->nome}}</option>
                                        @endif 
                                    @endif
                                @endforeach
                            </optgroup>
                        @endforeach
                      </select>          
                </div>
                <div class="mb-3 col-12 col-md-5">
                    <label for="stato" class="form-label text-capitalize">stato</label>
                    <input type="text" class="form-control" id="stato" name="stato" placeholder="Nuovo/Usato/..." value="{{$annuncio->stato}}">
                </div>
            </div>
    
            <div class="mb-3 col-9 mx-auto">
                <label for="descrizione" class="form-label text-capitalize">descrizione</label>
                <textarea class="form-control" placeholder="Scrivi qui..." name="descrizione" id="descrizione" rows="8" style="resize:none;">{{$annuncio->descrizione}}</textarea>
            </div>
            
            <div class="mb-3 form-check col-9 mx-auto">
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </div>
        </form>
    </div>

@endsection