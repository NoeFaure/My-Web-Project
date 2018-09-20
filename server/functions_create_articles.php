<?php 

require_once '../server/db.php';
require_once '../server/session.php';

function browse_categories()
{
	global $pdo;
	
	$req = $pdo->prepare('SELECT name FROM categories');
	$req->execute();
	$categories_names = $req->fetchAll();
	
	foreach($categories_names as $category)
	{
		echo('<option value="'. $category[0] .'">'. $category[0] .'</option>');
	}
}