<?php include('config.php');?>
<!DOCTYPE html>
<html lang="p">

<head>
	<title>Projeto 01</title>
	<link href="<?php echo INCLUDE_PATH; ?>estilo/all.css" rel="stylesheet">
	<!--load all styles -->
	<link
		href="<?php echo INCLUDE_PATH; ?>https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
	<meta charsert="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palvras, chaves do, meu, site">
	<meta name="description" content="Descrição do meu site">
</head>

<body>
	<header>
		<div class="center">
			<div class="logo left">
				<a href="<?php echo INCLUDE_PATH; ?>">
					<i class="fab fa-gg-circle"></i>
				</a>
			</div>
			<!--logo-->
			<nav class="desktop rigth">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile rigth">
				<div class="botao-menu-mobile">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</header>
<?php
	$url = isset($_GET['url']) ? $_GET['url'] : 'home';
	if(file_exists('pages/'.$url.'.php')){
		include('pages/'.$url.'.php');
	}else{
		include('pages/404.php');
	}

?>
	<footer>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div>
	</footer>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>

</html>