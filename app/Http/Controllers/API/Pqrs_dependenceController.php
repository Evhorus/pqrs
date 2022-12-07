<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pqrs_dependence;
use Illuminate\Http\Request;

class Pqrs_dependenceController extends Controller
{
    public function index()
    {
        $dependences = Pqrs_dependence::all()->toArray();
        return array_reverse($dependences);
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $input = $request->all();
        $imageName = NULL;

        Pqrs_dependence::create($input);

        return response()->json(['success'=> 'Dependence added successfully']);

    }

    public function edit($id)
    {
        $dependences = Pqrs_dependence::find($id);
        return response()->json($dependences);
    }

    public function update($id, Request $request)
    {
        $dependences = Pqrs_dependence::find($id);
        $request->validate([
            'name' => 'required'
        ]);

        $input = $request->all();
        $imageName = NULL;
   
        $dependences->update($input);

        return response()->json(['success'=> 'dependence updated successfully']);
    }

    public function delete($id)
    {
        $dependences = Pqrs_dependence::find($id);
        $dependences->delete();
        return response()->json(['success'=> 'dependence deleted successfully']);

    }
}
