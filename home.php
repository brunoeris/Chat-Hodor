<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CHAT APP HOME</title>
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
			<h1>Bem vindo, <?php echo $_SESSION['UserName']; ?>!</h1>
			<br><br>

			<div id="ChatBig">
				<div id="ChatMessages"></div>
				<textarea name="ChatText" id="ChatText"></textarea>
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
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#ChatText").keyup(function(e) {
				//Quando Pressionarmos Enter faça:
				if(e.keyCode ==13){
					var ChatText = $("#ChatText").val();
						$.ajax({
							url: 'InsertMessage.php',
							type: 'POST',
							data: {ChatText:ChatText},
							success:function(){
								$("#ChatMessages").load("DisplayMessage.php")
								$("#ChatText").val("");
							}
						});
				}
			});

			setInterval(function(){
				$("#ChatMessages").load("DisplayMessage.php")
			},1500);

			$("#ChatMessages").load("DisplayMessage.php")

		});
	</script>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>