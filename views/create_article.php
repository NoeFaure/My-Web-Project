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
					<input class="create-article-input" type="text" placeholder="Entrez un titre">
					
					<label class="create-article-label">Sous-titre (phrase d'accroche)</label>
					<input class="create-article-input" type="text" placeholder="Entrez un sous-titre">
					
					<label class="create-article-label">Auteur</label>
					<input class="create-article-input" type="text" placeholder="Entrez un nom d'auteur">
					
					<label for="file" class="create-article-label-file"><i class="fas fa-file-download"></i> &nbsp; Télécharger l'image de couverture de l'article</label>
					<input id="file" class="create-article-upload" type="file">
					
					<label class="create-article-label">Sélectionner une catégorie</label>
					<select class="create-article-select">
						<option value="Droit">Droit</option>
						<option value="Informatique">Informatique</option>
					</select>
					
					<div class="create-article-line-spacer"></div>
					
					<div class="create-article-page-number">Page 1</div>
					<a><div class="create-article-page-delete">Supprimer la page</div></a>
					
					<div class="create-article-create-page-container">
						<label class="create-article-label">Titre de la page</label>
						<input class="create-article-input" type="text" placeholder="Entrez un pour cette page">
						
						<textarea rows="4" cols="50" class="create-article-text-area"></textarea>
						
						<div class="create-article-line-spacer"></div>
						
						<input type="submit" value="Publier l'article" class="create-article-submit">
					</div>
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