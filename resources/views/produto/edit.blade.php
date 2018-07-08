@extends('layout.principal')

@section('conteudo')
    <h1>Editar {{ $produto->nome }}</h1>

    <form action="/produtos/update/{{ $produto->id }}" method="post">

        <input type="hidden"
               name="_token" value="{{ csrf_token() }}" />

        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control" value="{{ $produto->nome }}" />
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input name="valor" class="form-control" value="{{ $produto->valor }}" />
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number"
                   name="quantidade" class="form-control" value="{{ $produto->quantidade }}" />
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control" value="{{ $produto->descricao }}" />
        </div>
        <button type="submit"
                class="btn btn-primary btn-block">Salvar</button>
    </form>

@stop