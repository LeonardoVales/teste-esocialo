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
        <div class="col-12" style="margin-top: 20">
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
                        @foreach($contatos as $contato)
                          <tr>
                            <td>{{$contato->nome}}</td>
                            <td>{{$contato->email}}</td>
                            <td>{{$contato->telefone}}</td>
                            <td class="text-right">
                                <a href="#" title="Visualizar mensagem" class="btn btn-info btn-sm m-b-10">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{route('show-contato', ['id_contato' => $contato->id])}}" title="Editar contato" class="btn btn-sm btn-success">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="{{route('delete-contato', ['id_contato' => $contato->id])}}" title="Excluir contato" class="delete-link btn-sm btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

@endsection
