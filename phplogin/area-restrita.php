<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php 	
        session_start();
		if(!(isset($_SESSION['user']))){
			header("Location: login.php");
		}

		
		// echo $_SESSION['user']['email'];
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Área restrita</title>

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	  <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center mt-5">
            <div class="card" >
			<div class="card-header" >
				<h3>Área Restrita</h3>
			</div>
			<div class="card-body">
				Se você chegou aqui, seu usuário e senha foram validados no banco de dados.
				<div style="margin-top: 1rem;"><a href="sair.php">CLIQUE AQUI PARA SAIR DA SESSÃO</a></div>
			</div>
		
			
		</div>
	</div>

        <div class="mb-5"> </div>
</div>
</body>
</html>
