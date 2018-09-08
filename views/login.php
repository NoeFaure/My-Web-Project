<!DOCTYPE html>
<html>
    
<head>
	<?php 
		require '../layout/assets.php';
		require_once '../server/db.php';
	?>
	
	<!-- Feuille de style -->
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	
	<title>Login - Se connecter</title>
</head>
    
<body>

<?php require '../layout/menubar.php'; ?>
	
<div class="container-fluid">
	<div class="row">
  <div class="col-sm-4"></div>
		
  <div class="col-sm-4">
		<form class="login-container">
			<label>Nom d'utilisateur (e-mail)</label>
			<input class="login-input" type="text" required autocomplete="off" autofocus="on">
			<label class="label-password">Mot de passe</label>
			<input class="login-input login-password" type="password" required autocomplete="off">
			<input class="login-submit" type="submit" value="Se connecter">
		</form>
	</div>
		
  <div class="col-sm-4"></div>
	</div>
</div>

<?php require '../layout/footer.php'; ?>
	
</body>
    
</html>