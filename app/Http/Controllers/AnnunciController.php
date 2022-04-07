<?php

namespace App\Http\Controllers;

use App\Models\Annuncio;
use App\Models\Comune;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AnnunciController extends Controller
{
   
    public function index()
    {
    $annunci = User::find(Auth::id())->annunci;
    
    return view('annunci.index', ['annunci'=>$annunci]);
    }

    public function create()
    {
        $comuni = DB::select('select * from comuni order by regione ASC');
        $marche = DB::select('select * from marche order by nome ASC');
        $modelli = DB::select('select * from modelli order by nome ASC');

        return view('annunci.create', ['comuni' => $comuni, 'marche' => $marche, 'modelli' => $modelli]);
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'stato' => 'required|max:255',
            'titolo' => 'required|max:255',
            'prezzo' => 'required',
            'chilometraggio' => 'required',
            'immatricolazione' => 'required',
            'potenza' => 'required',
            'cilindrata' => 'required|max:255',
            'colore' => 'required|max:255',
            'alimentazione' => 'required|max:255',
            'carrozzeria' => 'required|max:255',
            'descrizione' => 'required',
            'indirizzo' => 'required|max:255',
            'modello' => 'required',
            'comune' => 'required'
        ]);

    /*if(!is_null($request->file('immagine'))) {
        $path=$request->file('immagine')->store('public/immagini');
        $nome_file=explode('/', $path);
    }
    else {
        $nome_file[2]=null;
    }*/
    $annuncio = new Annuncio;
    $annuncio->stato = $request->stato;
    $annuncio->titolo = $request->titolo;
    $annuncio->prezzo = $request->prezzo;
    $annuncio->chilometraggio = $request->chilometraggio;
    $annuncio->immatricolazione = $request->immatricolazione;
    $annuncio->potenza = $request->potenza;
    $annuncio->cilindrata = $request->cilindrata;
    $annuncio->colore = $request->colore;
    $annuncio->alimentazione = $request->alimentazione;
    $annuncio->carrozzeria = $request->carrozzeria;
    $annuncio->descrizione = $request->descrizione;
    $annuncio->indirizzo = $request->indirizzo;
    $annuncio->modello_id = $request->modello;
    $annuncio->comune_id = $request->comune;
    //$annuncio->immagine = $nome_file[2];
    $annuncio->user_id = Auth::id();
    $annuncio->save();
    return redirect()->route('annunci.index')->with('msg', 'Annuncio inserito correttamente');
    }

    public function show($id)
    {
    $annuncio = Annuncio::findOrFail($id);
    return view('annunci.show',['annuncio'=>$annuncio]);
    }

    public function edit($id)
    {
        $comuni = DB::select('select * from comuni order by regione ASC');
        $marche = DB::select('select * from marche order by nome ASC');
        $modelli = DB::select('select * from modelli order by nome ASC');
        $annuncio = Annuncio::find($id);
        return view('annunci.edit',['annuncio' => $annuncio,'comuni' => $comuni, 'marche' => $marche, 'modelli' => $modelli]);
    }

    public function update(Request $request, $id)
    {
    $annuncio = Annuncio::find($id);
    $annuncio->stato = $request->stato;
    $annuncio->titolo = $request->titolo;
    $annuncio->prezzo = $request->prezzo;
    $annuncio->chilometraggio = $request->chilometraggio;
    $annuncio->immatricolazione = $request->immatricolazione;
    $annuncio->potenza = $request->potenza;
    $annuncio->cilindrata = $request->cilindrata;
    $annuncio->colore = $request->colore;
    $annuncio->alimentazione = $request->alimentazione;
    $annuncio->carrozzeria = $request->carrozzeria;
    $annuncio->descrizione = $request->descrizione;
    $annuncio->indirizzo = $request->indirizzo;
    $annuncio->modello_id = $request->modello;
    $annuncio->comune_id = $request->comune;
    $annuncio->created_at = Carbon::now();
    $annuncio->user_id = Auth::id();
    
    $annuncio->save();
    return redirect()->route('annunci.index');
    }


    public function destroy($id)
    {
     $annuncio = Annuncio::find($id);
     if(Auth::id()==$annuncio->user->id){

        /*if(Storage::exists('public/immagini/'.$annuncio->immagine)){
            Storage::delete('public/immagini/'.$annuncio->immagine);
        }*/
         $annuncio->delete();
         return redirect()->route('annunci.index')->with('msg', 'Annuncio eliminato correttamente');
    }
    else {
        return "Non hai i permessi";
    }
    }
}
