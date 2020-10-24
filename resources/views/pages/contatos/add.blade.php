@extends('layouts.layout-principal');

@section('title')
    Novo Contato
@endsection()

@section('content')

<div class="row">
    <div class="col-6">
        <h6>Novo Contato</h3>
    </div>
    <div class="col-6 text-center">
        <a href="{{route('lista-contatos')}}" class="btn btn-primary">
            <i class="fas fa-arrow-left"></i>
            Voltar
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12" style="margin-top: 20px">
        <div class="card">
            <div class="card-body">

                <form method="post" action="{{route('save-contato')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nome</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">E-Mail</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Telefone</label>
                                <input type="text" name="telefone" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Arquivo</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="arquivo"  id="gif_exercicio" class="form-control-file" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Mensagem</label>
                                <textarea class="form-control" name="mensagem" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Salvar Contato
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
