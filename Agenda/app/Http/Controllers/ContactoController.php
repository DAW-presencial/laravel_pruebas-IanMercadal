<?php

namespace App\Http\Controllers;
use App\Models\Contacto;
use App\Models\User;
use App\Policies\ContactoPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ContactoController extends Controller
{
    public function index(Request $request) {
        // $contactos = Contacto::where('user_id', Auth::id())->latest()->paginate(5);
        $contactos = Contacto::all();
        return view('contactos.index', compact('contactos'));
    }

    public function create(Contacto $contacto) {
        $this->authorize('contactos.create');
        return view('contactos.create');
    }

    public function store(Request $request) {
        // Validacion de todo rellenado
        $request->validate([
            'name'=> 'required|max:20',
            'phone'=> 'required|max:12',
        ]);

        $contacto = new Contacto;

        $contacto->name = $request->name;
        $contacto->phone = $request->phone;
        $contacto->user_id = $request->user()->id;

        $contacto->save();
        return redirect()->route('contactos.index', $contacto);

    }
    public function show(Contacto $contacto) {
        return view('contactos.show',compact('contacto'));
    }
    public function edit(Contacto $contacto) {
        return view('contactos.edit', compact('contacto'));
    }
    public function update(Request $request, Contacto $contacto) {

        $this->authorize('contactos.update', $contacto);

        // Validacion de todo rellenado
        $request->validate([
            'name'=> 'required|max:20',
            'phone'=> 'required|max:12',
        ]);

        $contacto->name = $request->name;
        $contacto->phone = $request->phone;

        $contacto->save();
        return redirect()->route('contactos.index', $contacto);
    }
    public function destroy(Contacto $contacto) {

        $this->authorize('contactos.delete', $contacto);

        // if(Gate::denies('delete-contacto', $contacto)) {
        //     abort(403);
        // }
        $contacto->delete();
        return redirect()->route('contactos.index');
    }
}