<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de AAALAC</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	<header>
		<img class="w-100" src="{{ asset('/img/Encabezado.png') }}" alt="Imagen de encabezado">
		<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <a class="navbar-brand" href="#">AAALAC</a>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link" href="/asociados">Asociados</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/agentes">Agentes</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="/agencias">Agencias</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Pricing</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown link
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		    </ul>
		  </div>
		</nav>
	</header>
	<main>
		<div class="container" id="app">
			@yield('contenido')
		</div>
	</main>
	<footer>
		<script src="{{ asset('js/app.js') }}" ></script>
	</footer>
</body>
</html>

