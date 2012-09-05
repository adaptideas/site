<!DOCTYPE html>

<html lang="pt-br">
<head>

	<meta charset="UTF-8" />	
	<meta name="author" content="Mackan">
	<meta name="Description" content="A AdaptIdeas é uma empresa nacional, inspirada por transformar boas ideias em produtos simples, úteis e inteligentes.">
	<meta name="keywords" content="AdaptIdeas, ProcurandoCursos, Procurando Cursos, E-lixo, Elixo" />
	<meta name="robots" content="follow, all" />
	
	<link rel="stylesheet" href="css/ai.css" />
	<link rel="stylesheet" href="css/orbit-1.2.3.css" />	
	
	<title>AdaptIdeas</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>

<?php $page = explode('/', $_SERVER['REQUEST_URI']); ?>
<body id="<?= $page[1] ?>-page">

	<header>
		<div class="main">
			<a href="http://www.adaptideas.com.br" title="Voltar a página inicial" id="logo">
				<img src="images/logo.png" alt="Logo AdaptIdeas" />
			</a>
			<nav id="mainmenu">
				<ul>
					<li><a href="/" title="Voltar a página inicial" id="index">Home</a></li>
					<li><a href="/sobre" title="Sobre n&oacute;s" id="about">Sobre n&oacute;s</a></li>
					<li><a href="/servicos" title="Servi&ccedil;os" id="services">Servi&ccedil;os</a></li>
					<li><a href="/produtos" title="Produtos" id="products">Produtos</a></li>
					<li><a href="/eventos" title="Eventos" id="events">Eventos</a></li>
					<li><a href="/parceiros" title="Parceiros" id="partners">Parceiros</a></li>
					<li><a href="/contato" title="Contato" id="contact" class="last">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>