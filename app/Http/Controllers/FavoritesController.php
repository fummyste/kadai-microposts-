<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->addToFavotiteMicroposts($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->removeFromFavotiteMicroposts($id);
        return back();
    }
}
