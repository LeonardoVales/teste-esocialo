<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return view('pages.contatos.index');
    }

    public function create()
    {
        return view('pages.contatos.create-edit');
    }
}
