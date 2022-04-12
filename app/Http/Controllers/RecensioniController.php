<?php

namespace App\Http\Controllers;

use App\Models\Recensione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RecensioniController extends Controller
{
    public function store(Request $request, $uid)
    {
        if($uid!=Auth::id()){
            $rec = new Recensione();
            $rec->valutazione=$request->val;
            $rec->user_id=$uid;
            $rec->save();
            return redirect()->route('annunci.index')->with('msg', 'Utente Recensito!');
        }
        else {
            return redirect()->route('annunci.index')->with('autorec', 'Non puoi auto-recensirti!');
        }

    }
}
