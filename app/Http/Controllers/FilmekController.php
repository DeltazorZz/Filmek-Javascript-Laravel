<?php

namespace App\Http\Controllers;

use App\Models\Filmek;
use Illuminate\Http\Request;

class FilmekController extends Controller
{
    public function index(){
        $filmeks =  Filmek::all();
        return $filmeks;
    }

    public function store(Request $request)
    {
        $filmek = new Filmek();
        $filmek->cim = $request->cim;
        $filmek->rendezo = $request->rendezo;
        $filmek->kiadas = $request->kiadas;
        $filmek->ar = $request->ar;
        $filmek->save();
    }

    public function update(Request $request, $filmId)
    {
        $filmek = Filmek::find($filmId);
        $filmek->cim = $request->cim;
        $filmek->rendezo = $request->rendezo;
        $filmek->kiadas = $request->kiadas;
        $filmek->ar = $request->ar;
        $filmek->save();
        return Filmek::find($filmek->id);
    }

    public function destroy($filmId)
    {
        $filmek = Filmek::find($filmId)->delete();
        $filmek = Filmek::all();
        return $filmek;
    }
}
