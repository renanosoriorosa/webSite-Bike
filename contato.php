<?php 
	include 'php/conexao.php';
 ?>
 <?php 
 	session_start();
 	$mensagem="";
 	$nome=$_POST["nome"];
 	$email=$_POST["email"];
 	$telefone=$_POST["telefone"];
 	$msg=$_POST["texto"];
	
	if( $_SERVER['REQUEST_METHOD']=='POST' )
	{
		$request = md5( implode( $_POST ) );
		
		if( isset( $_SESSION['last_request'] ) && $_SESSION['last_request']== $request )
		{
		}
		else
		{
			$_SESSION['last_request']  = $request;
			$sql= "INSERT INTO contato(nome, email, telefone, mensagem) VALUES('$nome','$email','$telefone', '$msg')";
			if ($con->query($sql) === TRUE) {
    			$mensagem="<span class='alert alert-success'>Mensagem enviada com sucesso!</span>";
			} else {
    			$mensagem= "Error: " . $sql . "<br>" . $con->error;
			}
		}
	}
	$con->close(); 
 ?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title>Bikcraft  - Bicicletas Personalizadas</title>
	<link rel='shortcut icon' href="img/icone.ico"/> 
	<!-- BOOTSTRAP-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- CSS JS -->
	<link rel="stylesheet" href="css/contato.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/footer.css">
	<script src="js/script.js"></script>
	<script src="js/contato.js"></script>
	<!-- Add Google Maps -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBdHEvDFB_g22PgJC2M3vCGqcEvPd84x5g&callback=initMap" type="text/javascript"></script>
	<script src="js/googleMap.js"></script>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top menu">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			    </button>
			    <a class="navbar-brand" href="#">
			    	<img class="logo" src="img/bikcraft.png" alt="">
			    </a>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="myNavbar">
				<ul class="nav navbar-nav links">
				<li><a class="text-center" href="index.html">HOME</a></li>
					<li><a class="text-center" href="sobre.html">SOBRE</a></li>
					<li><a class="text-center" href="">PRODUTOS</a></li>
					<li><a class="text-center" href="">PORTIFÓLIO</a></li>
					<li><a class="text-center ativo" href="">CONTATO</a></li>
					<li><a class="text-center" href="blog.html">NOTÍCIAS</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid text-center contato">
		<div class="row">
			<h1>CONTATO</h1>
			<p>tire suas dúvidas com a gente</p>
		</div>
	</div>
	<div class="text-center info ">
		<?php echo "$mensagem";?>
	</div>
	<div class="container conteudo-contato">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-2">
				<form method="post" action="">
					<label for="nome">Nome:</label>
					<input type="text" id="nome" name="nome" class="form-control" required="" title="Preencha seu nome"><br>
					<label for="email">E-mail:</label>
					<input type="email" id="email" name="email" class="form-control" required=""><br>
					<label for="telefone">Telefone:</label>
					<input type="text" onkeypress="mascara(this, '## ####-#####')" minlength="10" maxlength="13" 
					id="telefone" name="telefone" class="form-control" required=""><br>
					<label for="texto">Mensagem</label>
					<textarea name="texto" id="texto" class="form-control" id="" cols="30" rows="10" required=""></textarea><br>
					<input type="submit" id="enviar" value="ENVIAR">
				</form>
			</div>
			<div class="col-sm-3 col-sm-offset-1 dados">
				<h3>DADOS</h3>
				<p>+55 21 9999-9999</p>
				<p>contato@bikcraft.com</p><br>
				<p>Rua Ali Perto - Botafogo</p>
				<p>Rio de Janeiro - RJ - Brasil</p>
				<h3>REDES SOCIAIS</h3>
				<a href="#"><img  src="img/facebook.png" alt=""></a>
				<a href="#"><img  src="img/instagram.png" alt=""></a>
				<a href="#"><img  src="img/twitter.png" alt=""></a>
			</div>
		</div>
	</div>
	<div class="container-fluid header-map text-center slideanim">
		<div class="row">
			<h3>ONDE ESTAMOS</h3>
		</div>
	</div>
	<div class="seta text-center">
		<span class="seta-baixo"></span>
	</div>
	<div id="googleMap" style="height:400px;width:100%;" class="slideanim" ></div>
	<!-- INICIO FOOTER -->
	<div class="linha1-footer container-fluid text-center slideanim"> 
		<div class="row">
			<blockquote>
				<p>“o verdadeiro segredo da felicidade está em ter um genuíno <br> interesse por todos os detalhes da vida cotidiana.”</p>
			</blockquote>
			<cite>WILLIAM MORRIS</cite>
		</div>
	</div>
	<div class="linha2-footer container-fluid slideanim">
		<div class="col-sm-3 col-sm-offset-1">
			<h3>NOSSA HISTÓRIA</h3>
			<p>Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer as coisas com as nossas próprias mãos. Assim surgiu um sonho na garagem da nossa casa.</p>
		</div>
		<div class="col-sm-2 col-sm-offset-1">
			<h3>CONTATO</h3>
			<p>
				- +55 21 9999-9999 <br>
				- contato@bikcraft.com <br>
				- Rua Ali Perto - Botafogo
			</p>
		</div>
		<div class="col-sm-3 col-sm-offset-1">
			<h3>REDES SOCIAIS</h3>
			<a href="#"><img  src="img/facebook.png" alt=""></a>
			<a href="#"><img  src="img/instagram.png" alt=""></a>
			<a href="#"><img  src="img/twitter.png" alt=""></a>
		</div>
	</div>
	<div class="linha3-footer container-fluid text-center">
		<p>Bikcraft 2016 - Alguns direitos reservados.</p>
	</div>
</body>
</html>