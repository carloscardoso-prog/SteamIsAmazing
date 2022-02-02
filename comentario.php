<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/comentario.css">
</head>
<body>
	<div id="corpo">
		<header id="cabecalho">
			<nav class="menu-items">
				<ul>
					<li><a target="_self" href="index.php">Main</a></li>
					<li><a target="_self" href="contato.php">Contact</a></li>
					<li><a target="_self" href="comentario.php">Comments</a></li>
					<li><a target="_blank" href="https://www.steamcommunity.com/id/BSM8/">My Steam Account</a></li>
					<li><a target="_blank" href="https://www.steamdb.info/">Steam DB</a></li>
				</ul>
			</nav>
		</header>

		<section class="pagina">
			<h1>Seção de Comentários</h1>
			<div class="conteudo">

			<p>Digite abaixo um comentário e ele será publicado na página.</p>

			<form class="formulario" action="comentario.php" method="get">
				<p>Email: <input type="text" name="email"/></p>
				<p>Comentário: <input type="text" name="comentario"/></p>
				<p><input type="submit" /></p>
			</form>
		
			</div>
		</section>

		<aside class="lateral">
				<p class="lateral"><?php echo $email = isset($_GET['email'])? $_GET['email'] : "" ?></p>
				<p class="lateral"><?php echo $comentario = isset($_GET['comentario'])? $_GET['comentario'] : "" ?></p>
		</aside>

		<footer id="copia">
			<p>lorem lorem, 2021 - Por Carlos Cardoso</p>
		</footer>

	</div>
</body>
</html>