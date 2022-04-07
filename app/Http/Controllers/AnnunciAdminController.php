<?php

namespace App\Http\Controllers;

use App\Models\Annuncio;
use Illuminate\Http\Request;

class AnnunciAdminController extends Controller
{
    public function index() {
        $annunci = Annuncio::all();

        return view('admin.annunci.index', compact('annunci'));
    }
}
