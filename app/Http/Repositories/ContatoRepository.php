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

    public function getById($id_contato)
    {
        return Contato::where('id', $id_contato)->first();
    }

    public function delete($id_contato)
    {
        try {
            return Contato::destroy($id_contato);
        } catch(\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function update($id_contato, $data)
    {
        $contato = Contato::where('id', $id_contato)->first();

        if ($contato) {
            try {
                $dataUpdate = [
                    'nome'            => $data['nome'],
                    'email'           => $data['email'],
                    'telefone'        => $data['telefone'],
                    'mensagem'        => $data['mensagem'],
                    'caminho_arquivo' => 'teste',
                    'ip'              => 'asdf'
                ];

                return $contato->update($dataUpdate);
            } catch(\Exception $e) {
                dd($e->getMessage());
            }
        }
    }
}
