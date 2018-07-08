<!DOCTYPE html>
<html>
<head>
	<title>Controle de Estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link href="/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">

    			<div class="navbar-header">      
      				<a class="navbar-brand" href="/produtos">Estoque Laravel</a>
    			</div>

      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="/produtos">Listagem</a></li>
        			<li><a href="/produtos/novo">Novo Produto</a></li>
      			</ul>
    		</div>
  		</nav>
		@yield('conteudo')
	<footer class="footer">
		<p>© Livro de Laravel do Alura.</p>
	</footer>

  </div>
</body>
</html>