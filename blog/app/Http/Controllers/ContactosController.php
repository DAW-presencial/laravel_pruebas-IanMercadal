<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function index() {
        $contactos = Contacto::all();
        return view('contactos.index', compact('contactos'));
    }

    public function create() {
        return view('contactos.create');
    }

    public function store(Request $request) {
        
    }
    public function show(Contacto $contacto) {
        return view('contactos.show',compact('contacto'));
    }
    public function edit(Contacto $contacto) {
        return view('contactos.edit', compact('contacto'));
    }
    public function update(Request $request, Contacto $contacto) {
        // Validacion de todo rellenado
        $request->validate([
            'name'=> 'required|max:20',
            'numero'=> 'required|max:12',
        ]);

        $contacto->name = $request->name;
        $contacto->numero = $request->numero;

        $contacto->save();
        return redirect()->route('contactos.show', $contacto);
    }
    public function destroy(Contacto $contacto) {
        $contacto->delete();
        return redirect()->route('contactos.index');
    }
}
