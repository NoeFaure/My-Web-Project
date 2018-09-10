<!DOCTYPE html>
<html>
<head>
	<?php 
		require '../layout/assets.php';
		require_once '../server/db.php';
		require '../server/functions_article.php';
		check_geter_article();
		$id_article = $_GET['article']; $page = $_GET['page']; 
	?>
	
	<title>WriteIt</title>
	
	<!-- Feuille de style -->
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	
</head>

<body>
<?php require '../layout/menubar.php'; ?>

<div class="container-fluid">
	<div class="row main-presentation">
	</div>
	<div class="row article-category-container">
		<div class="article-bullet">Informatique</div>
	</div>
	<div class="row">
  	<div class="col-sm-3 article-container"></div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3"></div>
		<div class="col-sm-3"></div>
	</div>
</div>
	
<?php require '../layout/footer.php'; ?>
</body>

</html>