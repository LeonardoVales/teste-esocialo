<?php

namespace App\Http\Repositories;

interface IContatoRepositoryInterface
{
    public function getAll();

    public function save(array $data);
}
