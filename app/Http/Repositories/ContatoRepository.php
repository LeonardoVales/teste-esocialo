<?php

namespace App\Http\Repositories;

use App\Models\Contato;


class ContatoRepository implements IContatoRepositoryInterface
{
    public function getAll()
    {
        return Contato::all();
    }

    public function save($data)
    {
        try {
            return Contato::create([
                'nome'            => $data['nome'],
                'email'           => $data['email'],
                'telefone'        => $data['telefone'],
                'mensagem'        => $data['mensagem'],
                'caminho_arquivo' => 'teste',
                'ip'              => 'asdf'
            ]);

        } catch(\Exception $e) {
            dd($e->getMessage());
        }
    }
}
