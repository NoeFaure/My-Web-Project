<?php

function get_number_of_like($id_article)
{
	
	global $pdo;
	
	$req = $pdo->prepare('SELECT nb_like FROM articles WHERE id = ?');
	$req->execute([$id_article]);
	$nb_like = $req->fetch();
	
	echo($nb_like[0]);
	
}
