<?php

require_once '../server/db.php';
require_once '../server/session.php';

global $pdo;

$errors = array();
	
//Check variable existance
if (isset($_POST['title']) && isset($_POST['under_title']) && (isset($_POST['category']) && isset($_POST['new_category'])) && isset($_POST['page_content']))
{
	$title = $_POST['title'];
	$under_title = $_POST['under_title'];
	$page_content_array = $_POST['page_content'];
	
	//Create category field
	// Category does not exist yet
	if(isset($_POST['category']) && isset($_POST['new_category']))
	{
		$category = $_POST['new_category'];
	}
	else if (isset($_POST['category']))
	{
		$category = $_POST['category'];
	}
	else
	{
		$errors[] = "Pas de catégorie sélectionnée";
	}
	
	if (empty($errors))
	{
		$today = '2018-09-13';        
		
		// Create article
		$req = $pdo->prepare('INSERT INTO articles (title, under_title, id_author, publication_date, id_category) VALUES (?,?,?,?,?)');
		$req->execute([$title, $under_title, $_SESSION['user'][0], $today, 1]);
	}
	
}