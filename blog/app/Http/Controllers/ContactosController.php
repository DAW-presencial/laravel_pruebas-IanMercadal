<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function index() {

        // Ordenar
        $contactos = Contacto::all();

        return view('contactos.index', compact('contactos'));
    }
    public function create() {
        return view('contactos.create');
    }
    public function store(Request $request) {
        
    }
    public function show(Contacto $contacto) {
        return view('contactos.show');
    }
    public function edit(Contacto $contacto) {
        return view('contactos.edit');
    }
    public function update(Request $request,Contacto $contacto) {
    }
    public function destroy(Contacto $contacto) {
        $contacto->delete();
        return redirect()->route('contactos.index');
    }
}
