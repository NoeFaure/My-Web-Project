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

function get_number_all_page($id_article)
{
	global $pdo;
	
	$req = $pdo->prepare('SELECT COUNT(*) FROM pages WHERE id_article = ?');
	$req->execute([$id_article]);
	$nb_pages = $req->fetch();
	
	echo($nb_pages[0]);
}

function check_geter_article()
{
	$pass = false;
	
	if (isset($_GET['article']) AND isset($_GET['page']))
	{
		global $pdo;
		
		//Force conversion in integer
		$_GET['article'] = (int) $_GET['article'];
		$_GET['page'] = (int) $_GET['page'];
		
		//check presence in database
		$req = $pdo->prepare('SELECT COUNT(*) FROM articles WHERE id = ?');
		$req->execute([$_GET['article']]);
		$check_article = $req->fetch();
		
		$req = $pdo->prepare('SELECT COUNT(*) FROM pages WHERE id_article = ? AND page_number = ?');
		$req->execute([$_GET['article'],$_GET['page']]);
		$check_page = $req->fetch();
		
		if ($check_page[0] != 0 AND $check_article[0] != 0)
		{
			$pass = true;
		}
	}
	
	//Pass or not
	if ($pass == false)
	{
		$_GET['article'] = 1;
		$_GET['page'] = 1;
	}
}

function next_page()
{
	$current_page = $_GET['page'];
	$next_page = $current_page + 1;
	
	global $pdo;
	
	//check presence in database
	$req = $pdo->prepare('SELECT COUNT(*) FROM pages WHERE id_article = ? AND page_number = ?');
	$req->execute([$_GET['article'], $next_page]);
	$check_page = $req->fetch();
	
	if($check_page[0] != 0)
	{
		echo("articles.php?article=" . $_GET['article'] . "&page=" . $next_page);
	}
	
	else
	{
		echo("#");
	}
	
	
}

function previous_page()
{
	$current_page = $_GET['page'];
	$previous_page = $current_page - 1;
	
	global $pdo;
	
	//check presence in database
	$req = $pdo->prepare('SELECT COUNT(*) FROM pages WHERE id_article = ? AND page_number = ?');
	$req->execute([$_GET['article'], $previous_page]);
	$check_page = $req->fetch();
	
	if($check_page[0] != 0)
	{
		echo("articles.php?article=" . $_GET['article'] . "&page=" . $previous_page);
	}
	
	else
	{
		echo("");
	}
	
	
}