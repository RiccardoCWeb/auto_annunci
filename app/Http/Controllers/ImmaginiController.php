<?php

namespace App\Http\Controllers;

use App\Models\Immagine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImmaginiController extends Controller
{
    public function create($id)
    {
        $immagini = Immagine::where('annuncio_id', $id)->get();
        return view('immagini.create', ['id' => $id, 'immagini' => $immagini]);
    }

    public function store(Request $request, $id)
    {
        $validated = $request->validate([
            'immagine' => 'required',
        ]);
       
        $path=$request->file('immagine')->store('public/immagini');
        $nome_file=explode('/', $path);

        $immagine= new Immagine;

        $immagine->immagine = $nome_file[2];
        $immagine->annuncio_id = $id;
        $immagine->save();
        return redirect()->route('immagini.create', $id);

    }

    public function destroy($immagine)
    {
        Storage::delete('public/immagini/'.$immagine);
        $img = Immagine::where('immagine', $immagine)->get();
        foreach($img as $imm){
            $id=$imm->annuncio_id;
            $imm->delete();
        }

        return redirect()->route('immagini.create', $id);

    }
}
