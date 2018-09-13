<?php

require_once '../server/db.php';
require_once '../server/session.php';

if( isset($_POST['password']) && isset($_POST['user']))
{
	global $pdo;
	
	// Protect from XSS failure
	$user = htmlspecialchars($_POST['user']);
	$password = $_POST['password'];
	
	// Check username (email)
	$req = $pdo->prepare('SELECT * FROM users WHERE email = ?');
	$req->execute([$user]);
	$result = $req->fetch();
	
	//Check password
	if($result == null)
	{
    $_SESSION['flash_text'] = 'Identifiant ou mot de passe incorrecte';
		header('Location: ../views/login.php');
		exit();
  }
	
	elseif(password_verify($_POST['password'], $result['password']))
	{
		$_SESSION['user'] = $result;
		$_SESSION['flash_text'] = 'Vous êtes maintenant connecté';
		header('Location: ../views/index.php');
		exit();
  }
	
	else
	{
		$_SESSION['flash_text'] = 'Identifiant ou mot de passe incorrecte 2';
		header('Location: ../views/login.php');
		exit();
 	}
}
else
{
	$_SESSION['flash_text'] = 'Identifiant ou mot de passe incorrecte';
	header('Location: ../views/login.php');
	exit();
}