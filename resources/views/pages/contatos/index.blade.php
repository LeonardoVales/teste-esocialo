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
                                <a href="#" data-toggle="modal" title="Visualizar contato" data-target="#contato_{{$contato->id}}" class="btn btn-info btn-sm m-b-10">
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

                        <div id="contato_{{$contato->id}}" class="modal fade" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="modal-title">
                                            <dt>Contato enviado em {{date('d/m/Y H:i:s', strtotime($contato->created_at))}}</dt>
                                        </div>
                                    </div>

                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <dl><strong>Nome: </strong>{{$contato->nome}}</dl>
                                                <dl><strong>E-mail: </strong>{{$contato->email}}</dl>
                                                <dl><strong>Telefone: </strong>{{$contato->telefone}}</dl>
                                                <dl><strong>Mensagem: </strong>{{$contato->mensagem}}</dl>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark waves-effect text-left" data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>

@endsection
