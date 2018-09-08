<!DOCTYPE html>
<html>
    
<head>
	<title>Article - </title>
    
	<?php require '../layout/assets.php'; ?>
	<?php require '../server/functions.php'; ?>
	<?php require_once '../server/db.php'; ?>
	<?php $id_article = 1; $page = 1; ?>

</head>
    
<body>

<?php require '../layout/menubar.php'; ?>
	
<div class="container-fluid">
	<div class="row">
  <div class="col-sm-2"></div>
		
  <div class="col-sm-8">
		<ul class="information-container">
			<li class="information-option-icons">
				<?php get_number_of_vue($id_article); ?> <i class="far fa-eye"></i>
				&nbsp; <?php get_number_of_like($id_article); ?> <i class="fas fa-heart rose"></i>
			</li>
			<li class="title"><?php get_title($id_article); ?></li>
			<li class="line-spacer-information"></li>
			<li class="under-title"><?php get_under_title($id_article); ?></li>
			<li class="author">Par : <?php get_author($id_article); ?></li>
		</ul>
		
		<div class="article-container">
			<ul class="option-article">
				<li class="publication-date">Publié le : <?php get_publication_date($id_article); ?></li>
				<li class="option-article-icons"><i class="fas fa-plus"></i></li>
				<li class="option-article-icons"><i class="fas fa-clipboard-list"></i></li>
				<li class="option-article-icons"><i class="far fa-heart rose"></i></li>
			</ul>
			
			<div class="step-title"><?php get_page_title($id_article, $page); ?></div>
			
			<div class="article-content"><?php get_page_content($id_article, $page); ?></div>
			
			<ul class="switch-page-container">
				<li class="no-previous">Page précédente</li>
				<li><span class="current-page">Page 1</span> Sur 25</li>
				<li class="switch-page">Page suivante</li>
			</ul>
		</div>
	</div>
  <div class="col-sm-2"></div>
	</div>
</div>

<?php require '../layout/footer.php'; ?>
	
</body>
    
</html>