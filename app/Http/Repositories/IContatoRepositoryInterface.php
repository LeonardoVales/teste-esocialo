<?php

namespace App\Http\Repositories;

interface IContatoRepositoryInterface
{
    public function getAll();

    public function save(array $data);

    public function delete($id_contato);

    public function getById($id_contato);

    public function update($id_contato, array $data);

    public function uploadFile(array $file);
}
