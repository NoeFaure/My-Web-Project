<ul class="container-fluid menu-bar">
	<a href="#"><li class="item"><i class="fas fa-language"></i></li></a>
	<a href="#"><li class="item"><i class="fas fa-pencil-ruler"></i> &nbsp;Projets</li></a>
	<a href="index.php"><li class="item"><i class="fas fa-newspaper"></i> &nbsp;Articles</li></a>
	<a href="index.php"><li class="item logo">Write it</li></a>
</ul>

<?php if(isset($_SESSION['user'])): ?>
	<ul class="admin-menubar">
		<li class="admin-sticker">ADMIN</li>
		<a><li>Rédiger un article</li></a>
		<a href="create_account.php"><li>Créer un compte</li></a>
		<a href="../server/logout.php"><li>Se déconnecter</li></a>
	</ul>
<?php endif; ?>