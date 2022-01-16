<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactosController extends Controller
{
    public function index() {
        return view('contactos.index');
    }
    public function create() {
        return view('contactos.create');
    }
    public function store() {
        
    }
    public function show() {
        return view('contactos.show');
    }
    public function edit() {
        return view('contactos.edit');
    }
    public function update() {
    }
}
