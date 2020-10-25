@extends('layouts.layout-principal');

@section('title')
    Editar Contato
@endsection()

@section('content')

<div class="row">
    <div class="col-6">
        <h6>Editar Contato</h3>
    </div>
    <div class="col-6 text-center">
        <a href="{{route('lista-contatos')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left"></i>
            Voltar
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12" style="margin-top: 20">
        <div class="card">
            <div class="card-body">

                <form method="post" action="{{route('update-contato', ['id_contato' => $contato->id])}}">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" name="nome" value="{{$contato->nome}}" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">E-Mail</label>
                                <input type="text" name="email" value="{{$contato->email}}" class="form-control email">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Telefone</label>
                                <input type="text" name="telefone" value="{{$contato->telefone}}" class="form-control telefone">
                            </div>
                        </div>
                        {{-- aqui viria o arquivo --}}
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Mensagem</label>
                                <textarea class="form-control" name="mensagem" rows="3">{{$contato->mensagem}}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-warning btn-lg btn-block">
                                Salvar edição
                                <i class="fas fa-save"></i>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


@endsection
