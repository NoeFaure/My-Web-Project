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
		<script src="../javascript/create_article.js"></script>
	
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
					<div style="display:flex;"><label class="create-article-label">Titre de l'article</label><span class="create-article-sticker">Champ obligatoire</span></div>
					<input class="create-article-input" type="text" placeholder="Entrez un titre">
					
					<div style="display:flex;"><label class="create-article-label">Sous-titre (phrase d'accroche)</label><span class="create-article-sticker">Champ obligatoire</span></div>
					<input class="create-article-input" type="text" placeholder="Entrez un sous-titre">
					
					<div style="display:flex;"><label class="create-article-label">Auteur</label><span class="create-article-sticker">Champ obligatoire</span></div>
					<input class="create-article-input" type="text" placeholder="Entrez un nom d'auteur">
					
					<div style="display:flex;"><label for="file" class="create-article-label-file"><i class="fas fa-file-download"></i> &nbsp; Télécharger l'image de couverture de l'article</label><span class="create-article-upload-info">0 fichier, Max : 2Mo (.jpeg)</span></div>
					<input id="file" class="create-article-upload" type="file"><br>
					
					<div style="display:flex;"><label class="create-article-label">Sélectionner une catégorie</label><span class="create-article-sticker">Remplissez un des deux champs</span></div>
					<select class="create-article-select">
						<option value="Droit">Droit</option>
						<option value="Informatique">Informatique</option>
					</select>
					
					<div style="display:flex;"><label class="create-article-label">Ou ajouter une catégorie</label></div>
					<div style="display:flex;"><i class="fas fa-plus plus-icon"></i><input class="create-article-input" type="text" placeholder="Entrez le nom d'une nouvelle catégorie"></div>
					
					
					<div class="create-article-line-spacer"></div>
					
					<div class="create-article-create-page-container">
						<div class="create-article-page-number">Page <span class="page-number">1</span> <span style="font-weight:200;">sur</span> <span style="font-weight:200;" class="page-number-length">1</span></div>
						<div class="create-article-page-delete"><i class="far fa-trash-alt"></i> Supprimer la page</div>
				
						<div style="display:flex;"><label class="create-article-label">Titre de la page</label><span class="create-article-sticker">Champ facultatif</span></div>
						<input class="create-article-input" type="text" placeholder="Entrez un titre pour cette page">
						
						<textarea rows="4" cols="50" class="create-article-text-area"></textarea>
						
						<label for="button-add-page" class="create-article-label-file"><input type="button" id="button-add-page" style="display:none;"><i class="fas fa-plus"></i> &nbsp; Ajouter une nouvelle page</label>
						<input type="button" id="button-add-page" style="display:none;">
						
						<div class="create-article-line-spacer"></div>
						
					</div>
					
						<Label for="submit" class="create-article-submit"><i class="far fa-paper-plane"></i> Publier l'article</Label>
						<input id="submit" type="submit" value="Publier l'article" style="display:none;">
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