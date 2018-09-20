<?php

require_once '../server/db.php';
require_once '../server/session.php';

global $pdo;

$errors = array();

// Check Upload file
$maxsize= 2097152;
$extensions_valides = array('jpg');
$extension_upload = strtolower(  substr(  strrchr($_FILES['picture']['name'], '.')  ,1)  );

if ($_FILES['icone']['error'] > 0)
{
	$errors[] = "Erreur lors du transfert de l'image";
}
if ($_FILES['icone']['size'] > $maxsize)
{
	$errors[] = "Le fichier est trop lourd";
}
if (in_array($extension_upload,$extensions_valides))
{
	// L'extension is ok
}
else
{
	$errors[] = "Le type d'image utilisé n'est pas pris en charge";
}
	
//Check variable existance
if (!empty($_POST['title']) && !empty($_POST['under_title']) && (!empty($_POST['category']) || !empty($_POST['new_category'])) && !empty($_POST['page_content']) && empty($errors))
{
	$title = $_POST['title'];
	$under_title = $_POST['under_title'];
	$page_content_array = $_POST['page_content'];
	
	// ---------- Create category field ----------
	// Category does not exist yet
	if(isset($_POST['category']) && !empty($_POST['new_category']))
	{
		$category = $_POST['new_category'];
		
		// Create Category
		$req = $pdo->prepare('INSERT INTO categories (name) VALUES (?)');
		$req->execute([$category]);
		
		// Get the last insertion
		$req = $pdo->prepare('SELECT id FROM categories WHERE id=LAST_INSERT_ID();');
		$req->execute([]);
		$id_category = $req->fetch();
		$id_category = $id_category[0];
		
		echo("c'est pas ok");
	}
	// Category already exist
	else if (empty($_POST['new_category']))
	{
		echo("c est ok");
		$category = $_POST['category'];
		
		//Look for the matching category
		$req = $pdo->prepare('SELECT id FROM categories WHERE name=?;');
		$req->execute([$category]);
		$id_category = $req->fetch();
		$id_category = $id_category[0];
		
		// Check if the category exist
		if (isset($id_category) && $category != 'Pas de catégorie correspondante')
		{
			// The category exist we keep the $id_category like that
		}
		else
		{
			$errors[] = "Vous n'avez pas sélectionné de catégorie ou la catégorie sélectionnée n'existe pas";
		}
		
	}
	// Error no category selected
	else
	{
		$errors[] = "Pas de catégorie sélectionnée";
	}
	
	if (empty($errors))
	{
		$today = '2018-09-13';        
		
		// Create article
		$req = $pdo->prepare('INSERT INTO articles (title, under_title, id_author, publication_date, id_category) VALUES (?,?,?,?,?)');
		$req->execute([$title, $under_title, $_SESSION['user'][0], $today, $id_category]);
		
		$req2 = $pdo->prepare('SELECT id FROM articles WHERE id=LAST_INSERT_ID()');
		$req2->execute();
		$id_article = $req2->fetch();
		
		// ---------- Upload picture ----------
		$path = "../images/{$id_article[0]}.{$extension_upload}";
		$resultat = move_uploaded_file($_FILES['picture']['tmp_name'],$nom);
		if (!$resultat)
		{
			$errors[] = "Erreur lors du transfert du fichier";
		}
		
		header('Location: ../views/index.php');
	}
	else
	{
		echo ($errors);
	}
	
}
else
{
	echo('champ(s) manquant(s)');
}