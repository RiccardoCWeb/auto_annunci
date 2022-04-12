<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImmaginiController extends Controller
{
    public function create($id)
    {
        return view('immagini.create', ['id' => $id]);
    }
}
