<?php

namespace App\Http\Controllers;

use App\Models\pokedex;
use Illuminate\Http\Request;

class ProkedexesController extends Controller
{
     public function index()
    {
        $data['pokedex'] = pokedex::all();
        return view('prokedex.index', $data);
    }
    public function store(Request $request)
    {


        $pokedex = new pokedex;
        $pokedex->name = $request->input('name');
        $pokedex->type = $request->input('type');
        $pokedex->species = $request->input('species');
        $pokedex->height = $request->input('height');
        $pokedex->weight = $request->input('weight');
        $pokedex->hp = $request->input('hp');
        $pokedex->attack = $request->input('attack');
        $pokedex->defense = $request->input('defense');
        $pokedex->image_url = $request->input('image_url');
        $pokedex->save();

        return redirect('/prokedexs');
    }

    public function edit(string $id)
    {
        $data['pokedex_update'] = pokedex::find($id);
        $data['pokedex'] = pokedex::all();

        return view('prokedex.edit', $data);
    }
     public function update(Request $request, string $id)
    {
        //

        $pokedex = pokedex::find($id);
        $pokedex->name = $request->input('name');
        $pokedex->type = $request->input('type');
        $pokedex->species = $request->input('species');
        $pokedex->height = $request->input('height');
        $pokedex->weight = $request->input('weight');
        $pokedex->hp = $request->input('hp');
        $pokedex->attack = $request->input('attack');
        $pokedex->defense = $request->input('defense');
        $pokedex->image_url = $request->input('image_url');
        $pokedex->save();

        return redirect('/prokedexs');

    }
    public function destroy(string $id)
    {
        //
        $pokedex = pokedex::find($id);
        $pokedex->delete();
        return redirect('/prokedexs');
    }





}
