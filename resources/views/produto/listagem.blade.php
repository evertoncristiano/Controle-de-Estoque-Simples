@extends('layout.principal')

@section('conteudo')
	<h1>Listagem de Produtos</h1>
	
	@if(old('nome'))
	<div class="alert alert-success">
    	<strong>Sucesso!</strong> O produto {{old('nome')}} foi adicionado.
	</div>
	@endif
	
	@if(empty($Produtos))
		<div class="alert alert-danger">Nenhum há nenhum produto cadastrado</div>
	@else
		<table class="table table-bordered text-center">
			@foreach($Produtos as $Produto)
				<tr class="{{ $Produto->quantidade < 5 ? 'danger' : '' }}">
					<td class="text-left"> {{ $Produto->nome }} </td>
					<td> {{ $Produto->valor }} </td>
					<td class="text-left"> {{ $Produto->descricao }} </td>
					<td> {{ $Produto->quantidade }} </td>
					<td>
						<a href="/produtos/mostra/{{ $Produto->id }}"><i class="fas fa-search"></i></a>
					</td>
					<td>
						<a href="/produtos/edit/{{ $Produto->id }}"><i class="fas fa-pencil-alt"></i></a>
					</td>
					<td>
						<a href="/produtos/remove/{{ $Produto->id }}"><i class="fas fa-trash"></i></a>
					</td>
				</tr>
			@endforeach
		</table>
	@endif

 	<h4>
  		<span class="label label-danger pull-right">
    		Há produtos com estoque baixo
  		</span>
 	</h4>
@stop