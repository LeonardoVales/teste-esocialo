@extends('layouts.layout-principal');

@section('title')
    Contatos
@endsection()


@section('content')

    <div class="row">
        <div class="col-6">
            <h6>Listagem de contatos</h3>
        </div>
        <div class="col-6 text-center">
            <a href="{{route('novo-contato')}}" class="btn btn-primary">
                Novo contato
                <i class="fas fa-folder-plus"></i>
            </a>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Telefone</th>
                            <th scope="col" class="text-right">Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Leonardo</td>
                            <td>leohenrique.vales</td>
                            <td>31865251</td>
                            <td class="text-right">
                                <a href="#" title="Visualizar mensagem" class="btn btn-info m-b-10">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" title="Editar contato" class="btn btn-success">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="#" title="Excluir contato" class="delete-link btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

@endsection
