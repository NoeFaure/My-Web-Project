<?php

function browse_article()
{
	global $pdo;
	
	$link = mysqli_connect("localhost", "root", "root", "writeit_db");

	/* Check connection */
	if (mysqli_connect_errno()) 
	{
			printf("Échec de la connexion : %s\n", mysqli_connect_error());
			exit();
	}
	
	$query = "SELECT * FROM articles";
	
	if ($result = mysqli_query($link, $query)) 
	{

    /* Récupère un tableau associatif */
    while ($metadata = mysqli_fetch_assoc($result)) 
		{

	
			$req2 = $pdo->prepare('SELECT content FROM pages WHERE id_article = ?');
			$req2->execute([$metadata['id']]);
			$extract_page = $req2->fetch();

			$extract_page[0] = substr ($extract_page[0], 0, 700);

			echo '<a class="article-clickable" href="articles.php?article='. $metadata['id'] .'&page=1"><div class="article-container">
						<div class="article-category">' . $metadata['category'] .'</div>
						<div class="article-picture"></div>
						<div class="article-info-container">
							<ul class="article-main-info-container">
								<li class="article-title">' . $metadata['title'] .'</li>
								<li class="article-option rose" data-toggle="tooltip" title="'. $metadata['nb_like'] .' likes">&nbsp; '. $metadata['nb_vues'] .' &nbsp;<i class="fas fa-heart"></i></li>
								<li class="article-option" data-toggle="tooltip" title="' . $metadata['nb_vues'] .' vues">&nbsp; ' . $metadata['nb_like'] .' &nbsp;<i class="far fa-eye"></i></li>
								<li class="article-option" data-toggle="tooltip" title="7 follows">7 &nbsp;<i class="fas fa-share"></i>
							</ul>
							<div class="article-under-title">' . $metadata['under_title'] .'</div>
							<div class="article-extract">' . $extract_page[0] . '</div>
						</div>
					</div></a>';
			}

    /* free results */
    mysqli_free_result($result);
	}

	/* close connection */
	mysqli_close($link);
	
}