@extends('layout.principal')

@section('conteudo')
		<h1>Detalhes do Produto <b>{{ $produto->nome }}</b></h1>
		<ul>
			<li><b>Descrição: </b>{{ $produto->descricao or 'Sem descrição' }}</li>
			<li><b>Estoque: </b>{{ $produto->quantidade }}</li>
			<li><b>Valor: </b>{{ $produto->valor }}</li>
		</ul>
@stop
