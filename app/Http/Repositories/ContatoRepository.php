<?php

namespace App\Http\Repositories;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoSendMail;
use App\Models\Contato;


class ContatoRepository implements IContatoRepositoryInterface
{
    /**
     * Método que retorna todos os contatos do banco
     */
    public function getAll()
    {
        return Contato::all();
    }

    /**
     * Método que salva o contato no banco
     * Primeiro chama o método uploadFile para fazer o upload do arquivo
     * Depois cria o registro no banco
     * e por último faz o envio do email
     */
    public function save($data)
    {

        $uploadFile = $this->uploadFile($data->file('arquivo'));

        try {
             $newContato = Contato::create([
                'nome'            => $data['nome'],
                'email'           => $data['email'],
                'telefone'        => $data['telefone'],
                'mensagem'        => $data['mensagem'],
                'caminho_arquivo' => $uploadFile,
                'ip'              => $_SERVER['REMOTE_ADDR'],
            ]);

            Mail::to($data['email'])->send(new ContatoSendMail($newContato));

        } catch(\Exception $e) {
            return redirect()->route('lista-contatos')
            ->with('error','Erro ao enviar contato - '.$e->getMessage());
        }
    }

    /**
     * Método que faz o upload do arquivo
     */
    public function uploadFile($file)
    {

        try {
            $name_file = uniqid(date('HisYmd')) . '.' . $file->extension();
            $upload = $file->storeAs('arquivos_contato', $name_file);

            return $upload;
        } catch(\Exception $e) {
            return redirect()->route('lista-contatos')
            ->with('error','Erro ao realizar upload do arquivo - '.$e->getMessage());
        }

    }

    /**
     * Método que retorna um único registro do banco com base no ID do registro
     */
    public function getById($id_contato)
    {
        return Contato::where('id', $id_contato)->first();
    }

    /**
     * Método que remove o registro do banco
     */
    public function delete($id_contato)
    {
        try {
            return Contato::destroy($id_contato);
        } catch(\Exception $e) {
            return redirect()->route('lista-contatos')
            ->with('error','Erro remover contato - '.$e->getMessage());
        }
    }

    /**
     * Método que atualiza o registro no banco
     */
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
                return redirect()->route('lista-contatos')
                ->with('error','Erro atualizar o contato - '.$e->getMessage());
            }
        }
    }
}
