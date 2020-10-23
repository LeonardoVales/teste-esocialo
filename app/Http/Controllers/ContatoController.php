<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Repositories\IContatoRepositoryInterface;

class ContatoController extends Controller
{

    protected $contato;

    public function __construct(IContatoRepositoryInterface $contato)
    {
        $this->contato = $contato;
    }


    public function index()
    {
        $contatos = $this->contato->getAll();

        return view('pages.contatos.index', compact('contatos'));
    }

    public function create()
    {
        return view('pages.contatos.create-edit');
    }

    public function save(Request $request)
    {
        $this->contato->save($request);

        return redirect()->route('lista-contatos');
    }
}
