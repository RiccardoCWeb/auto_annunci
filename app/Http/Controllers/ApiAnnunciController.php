<?php

namespace App\Http\Controllers;

use App\Models\Annuncio;
use App\Models\User;
use Illuminate\Http\Request;

class ApiAnnunciController extends Controller
{
    public function index()
    {
        $annunci= Annuncio::all();
        $annunci_array= $annunci->toArray();
        foreach($annunci_array as $key=>$annuncio) {
            $user = User::find($annuncio['user_id']);
            $annunci_array[$key]['nome']=$user->name;
        }
        return response()->json($annunci_array);
    
    }

    /*public function show($id)
    {
        $annuncio= Annuncio::find($id);

        $annuncio_array= $annuncio->toArray();
        $user = User::find($annuncio['user_id']);

        $annuncio_array['nome']=$user->name;

        return response()->json($annuncio_array);
    
    }*/

}
