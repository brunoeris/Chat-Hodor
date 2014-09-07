<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bem vindo ao Chat APP</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/formatalayout.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>

	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<buttom class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
					<!--<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>-->
				</buttom>

				<div class="nav-collapse collapse">
					<ul class="nav">
						<!--<li><a href="index.php">HOME</a></li>-->
					</ul>
					<form action="" class="navbar-form pull-right">
						<input type="text" class="span2" placeholder="Apenas decorativo! ;)">
							<button class="btn btn-inverse">Buscar</button>
					</form>
				</div>
			</div>
		</div>
	</nav>

	<header class="jumbotron subhead">
		<div class="container">
			<h1>Chat Hodor!</h1>
			<div class="hodorimg"><img src="img/hodor.jpg" alt="" class="img-circle"></div>
		</div>
	</header>

	
	<div class="container">
		<div class="row">
			<br><br>
			<h2>Login Form</h2>
			<div id="loginDiv">
				<form action="UserLogin.php" method="post">
					<fieldset>
						<div class="input-prepend">
							<span class="add-on">@</span>
						    <input type="email" name="UserMailLogin" placeholder="fulano@email.com" required><br>
						</div><br>
						<div class="input-prepend">
							<span class="add-on">!</span>
						    <input type="password" name="UserPasswordLogin" placeholder="Password" required><br>
						</div><br>
						<button type="reset" class="btn">Limpar</button>
					    <button type="submit" class="btn btn-primary">Enviar</button>
						<?php 
							if(isset($_GET['error'])){
						?>
							<tr>
								<td></td><td><span style="color:red">ERROR LOGIN</span></td>
							</tr>
						 <?php 
						 	}
						?>
					</fieldset>
				</form>
			</div>
			<br>
			<h2>Signup Form</h2>
			<div id="signUpDiv">
				<form action="InsertUser.php" method="post">
					<fieldset>
						<div class="input-prepend">
						    <input type="text" name="UserName" placeholder="Seu Nome.." required><br>
						</div><br>
						<div class="input-prepend">
						    <input type="email" name="UserMail" placeholder="Seu Email.." required><br>
						</div><br>
						<div class="input-prepend">
						    <input type="password" name="UserPassword" placeholder="Password" required><br>
						</div><br>
						<button type="reset" class="btn">Limpar</button>
					    <button type="submit" class="btn btn-success">Enviar</button>
						<?php 
							if(isset($_GET['success'])){
						 ?>
							 <tr>
								<td></td><td><span style="color:green">User Inserted</span></td>	
							</tr>
						<?php 
							}
						 ?>
						
					</fieldset>
				</form>
			</div>


		</div>
	</div>

	

	<!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p>Material de estudo, contribua em: <a href="https://github.com/brunoeris" target="_blank">GitHub/brunoeris</a> // EMAIL: brunoeriss@gmail.com.</p>
      	<br><p class="pull-right"><a href="#">Voltar ao topo</a></p>
      </div>
    </footer>

	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>