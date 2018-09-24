<!DOCTYPE html>
<html>
    
<head>
	<?php 
		require '../layout/assets.php';
		require_once '../server/db.php';
		require '../server/functions_article.php';
		require_once '../server/session.php';
		check_geter_article();
		$id_article = $_GET['article']; $page = $_GET['page']; 
	?>
	
	<!-- JavaScript for article -->
	<script src="../javascript/articles.js"></script>
	
	<!-- Feuille de style -->
	<link rel="stylesheet" type="text/css" href="../css/article.css">
	
	<title>Article - <?php get_title($id_article); ?></title>
</head>
    
<body>

<?php require '../layout/menubar.php'; ?>
	
<div class="container-fluid">
	<div class="row">
  <div class="col-sm-2"></div>
		
  <div class="col-sm-8">
		<ul class="information-container" <?php print_picture($id_article) ?>>
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
				<li class="option-article-icons under_title_list_click" type="button"><i class="fas fa-clipboard-list"></i></li>
				<li class="option-article-icons"><i class="far fa-heart rose"></i></li>
			</ul>
			
			<div class="step-title"><?php get_page_title($id_article, $page); ?></div>
			
			<ul class="all-under-titles"><?php get_all_under_titles($id_article); ?></ul>
			
			<div class="article-content"><?php get_page_content($id_article, $page); ?></div>
			
			<ul class="switch-page-container">
				<li><a id="previous_page" class="switch-page" href="<?php previous_page(); ?>">Page précédente</a></li>
				<li>
					<span class="current-page">
						Page <span id="current_page"><?php echo($page); ?></span>
					</span> sur <span id="total_page"><?php get_number_all_page($id_article); ?></span>
				</li>
				<li><a id="next_page" class="switch-page" href="<?php next_page(); ?>">Page suivante</a></li>
			</ul>
		</div>
	</div>
  <div class="col-sm-2"></div>
	</div>
</div>

<?php require '../layout/footer.php'; ?>
	
</body>
    
</html>