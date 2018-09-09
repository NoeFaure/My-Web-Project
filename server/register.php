<?php

if (!empty($_POST))
{
	$errors = array();
	
	if(empty($_POST['username']) || !filter_var($_POST['username'], FILTER_VALIDATE_EMAIL))
	{
		$errors['username'] = "Vous n'avez pas rentré un nom d'utilisateur valide";
	}
	else
	{
		$req = $pdo->prepare("SELECT id FROM users WHERE email = ?");
		$req->execute([$_POST['username']]);
		$user = $req->fetch();
		
		if($user)
		{
			$errors['username'] = 'Cet utilisateur existe déjà';
		}
	}
	
	if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm'])
	{
		$errors['password'] = "Vous n'avez pas rentré un mot de passe valide";
	}
	
	if(empty($_POST['first_name']))
	{
		$errors['first_name'] = "Vous n'avez pas rentré de prénom";
	}
	
	if(empty($_POST['last_name']))
	{
		$errors['last_name'] = "Vous n'avez pas rentré de nom";
	}
	
	//Parametters are corrects
	if(empty($errors))
	{
		$req = $pdo->prepare("INSERT INTO users SET email = ?, password = ?, first_name = ?, last_name = ?");
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
		$req->execute([$_POST['username'], $password, $_POST['first_name'], $_POST['last_name']]);
	}
}