<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ContactoController extends Controller
{
    public function index() {
        $contactos = Contacto::all();
        return view('contactos.index', compact('contactos'));
    }

    public function create() {
        return view('contactos.create');
    }

    public function store(Request $request) {
        // Validacion de todo rellenado
        $request->validate([
            'name'=> 'required|max:20',
            'numero'=> 'required|max:12',
        ]);

        $contacto = new Contacto;
        
        $contacto->name = $request->name;
        $contacto->numero = $request->numero;

        $contacto->save();
        return redirect()->route('contactos.show', $contacto);

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

        // Gate 

        if(Gate::denies('update-contacto', $contacto)) {
            abort(403, "No puedes editar este post");
        }

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
