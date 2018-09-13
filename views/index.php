<!DOCTYPE html>
<html>
<head>
	<?php 
		require '../layout/assets.php';
		require_once '../server/db.php';
		require '../server/functions_article.php';
		require '../server/functions_index.php';
		require_once '../server/session.php';
	?>
	
	<title>WriteIt</title>
	
	<!-- Feuille de style -->
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	
	<!-- JavaScript for article -->
	<script src="../javascript/index.js"></script>
	
</head>

<body>
<?php require '../layout/menubar.php'; ?>

<div class="container-fluid">
	<div class="row">
  	<div class="col-sm-10 article-main-container">
			
			<?php browse_article(); ?>
			
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
	
<?php require '../layout/footer.php'; ?>
</body>

</html>