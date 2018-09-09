<!DOCTYPE html>
<html>
    
<head>
	<?php 
		require '../layout/assets.php';
		require_once '../server/db.php';
		require '../server/register.php';
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
		<form class="login-container" action="" method="post">
			<div class="login-header">Création d'un compte</div>
			
			<?php if(!empty($errors)): ?>
			
				<div class="alert alert-info login-alert" role="alert">
  				<strong>Vérifiez vos paramètres</strong>
						<ul>
							<?php foreach($errors as $error): ?>
								<li><?= $error; ?></li>
							<?php endforeach; ?>
						</ul>
				</div>
			
			<?php endif; ?>
					
			<label>Nom d'utilisateur (e-mail)</label>
			<input class="login-input" name="username" type="text" autocomplete="off" autofocus="on" required>
			
			<label class="label-password">Prénom</label>
			<input class="login-input" name="first_name" type="text" autocomplete="off" required>
			
			<label class="label-password">Nom</label>
			<input class="login-input" name="last_name" type="text" autocomplete="off" required>
			
			<label class="label-password">Mot de passe</label>
			<input class="login-input login-password" name="password" type="password" autocomplete="off" required>
			
			<label class="label-password">Confirmer le mot de passe</label>
			<input class="login-input login-password" name="password_confirm" type="password" autocomplete="off" required>
			
			<input class="button-1 login-submit" type="submit" value="Créer">
		</form>
	</div>
		
  <div class="col-sm-4"></div>
	</div>
</div>

<?php require '../layout/footer.php'; ?>
	
</body>
    
</html>