<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scan;

class AdminController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'date_ajout' => 'required|date',
        ]);

        Scan::create($validatedData);

        return redirect()->route('liste');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'date_ajout' => 'required|date',
        ]);

        $element = Scan::findOrFail($id);
        $element->update($validatedData);

        return redirect()->route('liste')->with('success', 'L\'élément a été mis à jour avec succès');
    }

    public function delete($id)
    {
        $element = Scan::findOrFail($id);
        $element->delete();

        return redirect()->back()->with('success', 'L\'élément a été supprimé avec succès');
    }
}
