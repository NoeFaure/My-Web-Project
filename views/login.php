<!DOCTYPE html>
<html>
    
<head>
	<?php 
		require '../layout/assets.php';
		require_once '../server/db.php';
		require_once '../server/session.php';
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
		<form class="login-container" method="post" action="../server/sign_in.php">
			<div class="login-header">Espace membre</div>
			<?php require '../server/flash_message.php' ?>
			<label>Nom d'utilisateur (e-mail)</label>
			<input class="login-input" type="text" required name="user" autocomplete="off" autofocus="on">
			<label class="label-password">Mot de passe</label>
			<input class="login-input login-password" type="password" name="password" required autocomplete="off">
			<input class="button-1 login-submit" type="submit" value="Se connecter">
		</form>
	</div>
		
  <div class="col-sm-4"></div>
	</div>
</div>

<?php require '../layout/footer.php'; ?>
	
</body>
    
</html>