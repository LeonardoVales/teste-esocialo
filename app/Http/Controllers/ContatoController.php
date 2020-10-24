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
        return view('pages.contatos.add');
    }

    public function save(Request $request)
    {
        $this->contato->save($request);

        return redirect()->route('lista-contatos')->with('success', 'Contato enviado com sucesso');

    }

    public function delete($id_contato)
    {
        $this->contato->delete($id_contato);

        return redirect()->route('lista-contatos')->with('success', 'Contato removido com sucesso');
    }

    public function show($id_contato)
    {
        $contato = $this->contato->getById($id_contato);

        return view('pages.contatos.edit', compact('contato'));
    }

    public function update($id_contato, Request $request)
    {
        $this->contato->update($id_contato, $request);
    }


}
