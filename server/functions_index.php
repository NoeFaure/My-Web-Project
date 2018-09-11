<?php

function browse_article()
{
	global $pdo;
	
	$req = $pdo->prepare('SELECT * FROM articles');
	$req->execute();
	$metadata = $req->fetch();
	
	$req2 = $pdo->prepare('SELECT content FROM pages WHERE id_article = ?');
	$req2->execute([$metadata[0]]);
	$extract_page = $req2->fetch();
	
	$extract_page[0] = substr ($extract_page[0], 0, 700);
	
	echo '<a class="article-clickable" href="articles.php?article='. $metadata[0] .'&page=1"><div class="article-container">
				<div class="article-category">Informatique</div>
				<div class="article-picture"></div>
				<div class="article-info-container">
					<ul class="article-main-info-container">
						<li class="article-title">' . $metadata[1] .'</li>
						<li class="article-option rose" data-toggle="tooltip" title="'. $metadata[5] .' likes">&nbsp; '. $metadata[5] .' &nbsp;<i class="fas fa-heart"></i></li>
						<li class="article-option" data-toggle="tooltip" title="' . $metadata[6] .' vues">&nbsp; ' . $metadata[6] .' &nbsp;<i class="far fa-eye"></i></li>
						<li class="article-option" data-toggle="tooltip" title="7 follows">7 &nbsp;<i class="fas fa-share"></i>
					</ul>
					<div class="article-under-title">' . $metadata[2] .'</div>
					<div class="article-extract">' . $extract_page[0] . '</div>
				</div>
			</div></a>';
}