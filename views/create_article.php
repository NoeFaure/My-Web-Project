<?php 
	require '../layout/assets.php';
	require_once '../server/db.php';
	require_once '../server/session.php';
?>

<?php if(isset($_SESSION['user'])){?>

<!DOCTYPE html>
<html>
<head>
	<title>Rédiger un article</title>
	
	<!-- Feuille de style -->
	<link rel="stylesheet" type="text/css" href="../css/create_article.css">
	
	<!-- JavaScript for create_article -->
	
</head>

<body>
<?php require '../layout/menubar.php';?>
	
<div class="container-fluid">
	<div class="row">
  	<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<div class="create-article-container">
				<div class="create-article-title-header">Rédiger un article</div>
				<form action="#" method="post">
					<label class="create-article-label">Titre de l'article</label>
					<input class="create-article-input" type="text">
					
					<label class="create-article-label">Sous-titre (phrase d'accroche)</label>
					<input class="create-article-input" type="text">
					
					<label class="create-article-label">Auteur</label>
					<input class="create-article-input" type="text">
					
					<label for="file" class="create-article-label-file"><i class="fas fa-file-download"></i> &nbsp; Télécharger l'image de couverture de l'article</label>
					<input id="file" class="create-article-upload" type="file">
					<div class="create-article-line-spacer"></div>
				</form>
			</div>
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
	
<?php require '../layout/footer.php'; ?>
</body>

</html>

<?php }
else
{
	header('Location: login.php');
	exit();
}
?>