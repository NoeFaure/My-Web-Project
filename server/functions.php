<?php

function get_number_of_like($id_article)
{
	
	global $pdo;
	
	$req = $pdo->prepare('SELECT nb_like FROM articles WHERE id = ?');
	$req->execute([$id_article]);
	$nb_like = $req->fetch();
	
	echo($nb_like[0]);
	
}

function get_number_of_vue($id_article)
{
	
	global $pdo;
	
	$req = $pdo->prepare('SELECT nb_vues FROM articles WHERE id = ?');
	$req->execute([$id_article]);
	$nb_vue = $req->fetch();
	
	echo($nb_vue[0]);
	
}

function get_title($id_article)
{
	
	global $pdo;
	
	$req = $pdo->prepare('SELECT title FROM articles WHERE id = ?');
	$req->execute([$id_article]);
	$title = $req->fetch();
	
	echo($title[0]);
	
}

function get_under_title($id_article)
{
	
	global $pdo;
	
	$req = $pdo->prepare('SELECT under_title FROM articles WHERE id = ?');
	$req->execute([$id_article]);
	$under_title = $req->fetch();
	
	echo($under_title[0]);
	
}

function get_author($id_article)
{
	
	global $pdo;
	
	$req = $pdo->prepare('SELECT id_author FROM articles WHERE id = ?');
	$req->execute([$id_article]);
	$id_author = $req->fetch();
	
	$req = $pdo->prepare('SELECT first_name, last_name FROM users WHERE id = ?');
	$req->execute([$id_author[0]]);
	$author = $req->fetch();
	
	echo($author[0] . " " . $author[1]);
}

function get_publication_date($id_article)
{
	global $pdo;
	
	$req = $pdo->prepare('SELECT publication_date FROM articles WHERE id = ?');
	$req->execute([$id_article]);
	$publication_date = $req->fetch();
	$u_date = $publication_date[0];
	
	//Formatting
	$mounth_list = array("janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "decembre");
	
	$year = (string)$u_date[0] . (string)$u_date[1] . (string)$u_date[2] . (string)$u_date[3];
	
	if ($u_date[8] != 0)
	{
		$day = (string)$u_date[8] . (string)$u_date[9];
	}
	else
	{
		$day = (string)$u_date[9];
	}
	
	if ($u_date[6] != 0)
	{
		$mounth_number = (string)$u_date[6] . (string)$u_date[7];
		$mounth_number = intval($mounth_number);
	}
	else
	{
		$mounth_number = $u_date[7];
	}
	
	$mounth = $mounth_list[$mounth_number];
	
	echo($day . " " . $mounth . " " . $year);
	
}

function get_page_title($id_article, $page_number)
{
	global $pdo;
	
	$req = $pdo->prepare('SELECT title FROM pages WHERE id_article = ? AND page_number = ?');
	$req->execute([$id_article, $page_number]);
	$title = $req->fetch();
	
	echo($title[0]);
}

function get_page_content($id_article, $page_number)
{
	global $pdo;
	
	$req = $pdo->prepare('SELECT content FROM pages WHERE id_article = ? AND page_number = ?');
	$req->execute([$id_article, $page_number]);
	$content = $req->fetch();
	
	echo($content[0]);
}
