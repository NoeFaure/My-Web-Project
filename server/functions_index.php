<?php

function create_picture($id)
{
	$style = "style=\"background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(../images/". $id .".jpg);\"";
	return $style;
}

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
			$style = create_picture($metadata['id']);
			
			//Category
			$req3 = $pdo->prepare('SELECT name FROM categories WHERE id = ?');
			$req3->execute([$metadata['id_category']]);
			$category = $req3->fetch();
			
			//Author
			$req3 = $pdo->prepare('SELECT first_name, last_name FROM users WHERE id = ?');
			$req3->execute([$metadata['id_author']]);
			$author = $req3->fetch();

			$extract_page[0] = substr ($extract_page[0], 0, 700);

			echo '
			<div class="article-header">
				<ul class="article-header-list">
					<li class="list-element-left">Par : '. $author[0] . ' ' . $author[1] .'</li>
					<li class="list-element-right list-date">'. $metadata['publication_date'] .'</li>
					<li class="list-element-right">S\'abonner</li>
				</ul>
			</div>';
			
			echo '<a class="article-clickable" href="articles.php?article='. $metadata['id'] .'&page=1"><div class="article-container">
							<div class="article-category">' . $category[0] .'</div>
								<div class="article-picture" '. $style.'></div>
									<div class="article-info-container">
										<ul class="article-main-info-container">
											<li class="article-title">' . $metadata['title'] .'</li>
											<li class="article-option rose" data-toggle="tooltip" title="'. $metadata['nb_like'] .' likes">&nbsp; '. $metadata['nb_like'] .' &nbsp;<i class="fas fa-heart"></i></li>
											<li class="article-option" data-toggle="tooltip" title="' . $metadata['nb_vues'] .' vues">&nbsp; ' . $metadata['nb_vues'] .' &nbsp;<i class="far fa-eye"></i></li>
											<li class="article-option" data-toggle="tooltip" title="' . $metadata['nb_share'] .' follows">' . $metadata['nb_share'] .' &nbsp;<i class="fas fa-bullhorn"></i>
										</ul>
									<div class="article-under-title">' . $metadata['under_title'] .'</div>
								<div class="article-extract">' . $extract_page[0] . '</div>
							</div>
						</div>
					</a>';
			}

    /* free results */
    mysqli_free_result($result);
	}

	/* close connection */
	mysqli_close($link);
	
}