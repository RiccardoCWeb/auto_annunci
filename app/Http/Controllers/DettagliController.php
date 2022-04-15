<?php

namespace App\Http\Controllers;

use App\Models\Dettaglio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DettagliController extends Controller
{
    public function create($id)
    {
        return view('dettagli.create', ['id' => $id]);
    }

    public function store(Request $request, $id)
    {
        
        $validated = $request->validate([
            'proprietari' => 'required',
            'cambio' => 'required',
            'vernice' => 'required',
            'rivestimenti' => 'required',
            'posti' => 'required',
            'porte' => 'required',
            'consumi' => 'required',
            'emissioni' => 'required',
            'equipaggiamento' => 'required'
        ]);

    $dettaglio = new Dettaglio;
    $dettaglio->annuncio_id=$id;
    $dettaglio->proprietari = $request->proprietari;
    $dettaglio->cambio = $request->cambio;
    $dettaglio->vernice = $request->vernice;
    $dettaglio->rivestimenti = $request->rivestimenti;
    $dettaglio->posti = $request->posti;
    $dettaglio->porte = $request->porte;
    $dettaglio->consumi = $request->consumi;
    $dettaglio->emissioni = $request->emissioni;
    $dettaglio->equipaggiamento = $request->equipaggiamento;

    $dettaglio->save();
    //return view('immagini.create', ['id' => $id]);
    return redirect()->route('immagini.create', $id);

    }

}
