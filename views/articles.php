<!DOCTYPE html>
<html>
    
<head>
	<title>Article - </title>
    
	<?php require '../layout/assets.php'; ?>
	<?php require '../server/functions.php'; ?>
	<?php require_once '../server/db.php'; ?>

</head>
    
<body>

<?php require '../layout/menubar.php'; ?>
	
<div class="container-fluid">
	<div class="row">
  <div class="col-sm-2"></div>
		
  <div class="col-sm-8">
		<ul class="information-container">
			<li class="information-option-icons">154 <i class="far fa-eye"></i> &nbsp; <?php get_number_of_like(1); ?> <i class="fas fa-heart rose"></i></li>
			<li class="title">Rédaction du feuille de style CSS</li>
			<li class="line-spacer-information"></li>
			<li class="under-title">Comment rédiger une feuille de style ?</li>
			<li class="author">Par : Noé Faure</li>
		</ul>
		
		<div class="article-container">
			<ul class="option-article">
				<li class="publication-date">Publié le : 6 septembre 2018</li>
				<li class="option-article-icons"><i class="fas fa-plus"></i></li>
				<li class="option-article-icons"><i class="fas fa-clipboard-list"></i></li>
				<li class="option-article-icons"><i class="far fa-heart rose"></i></li>
			</ul>
			
			<div class="step-title">Introduction</div>
			
			<div class="article-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lacinia neque sem, at ultricies ante luctus sed. Nulla eget hendrerit metus. Nunc maximus justo vel tellus auctor, nec dapibus erat vehicula. Aliquam hendrerit dui lacus, vel lobortis purus pulvinar auctor. Suspendisse cursus urna non lobortis laoreet. Proin at risus facilisis, ultrices urna quis, pharetra diam. Proin dolor ante, porttitor non diam ac, fermentum lacinia tellus. Quisque eget tellus nec purus sodales placerat. Integer mollis auctor auctor. Nam bibendum lectus vel convallis vehicula. Sed placerat hendrerit elit, nec pellentesque dui ullamcorper a. Fusce ullamcorper vel urna eget pellentesque. Nam tortor magna, convallis nec interdum vel, pretium eu nisi.<br><br>

			Sed ut imperdiet nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada ut lacus vitae molestie. Mauris ut nunc tortor. Maecenas lacinia cursus elit, a consequat massa ultrices ut. Maecenas venenatis, arcu nec accumsan sollicitudin, tortor diam eleifend augue, quis egestas risus ante vitae purus. Aliquam quis augue at mi luctus aliquet. Nam aliquam finibus sodales. Etiam dignissim nibh at metus viverra, sed ultrices risus egestas. Vestibulum pulvinar quam non mattis congue. Duis risus magna, pulvinar et accumsan condimentum, cursus a mi.<br><br>

			Donec euismod egestas felis non luctus. Ut finibus, urna eu tempus mattis, enim augue pellentesque augue, id pulvinar augue velit ut ex. Praesent at sem eu lacus posuere molestie. Quisque tempor imperdiet ligula, eget pretium erat bibendum non. Mauris fringilla in mauris vitae blandit. Suspendisse lacinia nibh a dapibus lacinia. Nulla a pulvinar tellus, sit amet congue lacus. Aenean et diam vel sem porttitor vulputate. Etiam auctor semper quam at aliquet. Morbi id lacinia mauris. Mauris a sem non dolor dignissim auctor at sit amet ex. Maecenas suscipit facilisis orci, eu tempus mauris pellentesque et.<br><br>

			Vivamus tristique blandit odio, vitae mattis libero tristique cursus. Cras egestas eleifend sem, porttitor iaculis nisl mattis a. Vivamus pulvinar est a odio placerat consectetur. Pellentesque ultricies aliquet mattis. Nunc ac eleifend eros, a commodo lectus. In id tempus sem. Nam euismod posuere lacus eu gravida. Sed tincidunt nisi vitae semper bibendum. Pellentesque ac quam eget urna sodales tristique. Quisque ultricies nisl eu tortor semper egestas. Duis rutrum, neque imperdiet pellentesque mollis, lectus velit volutpat diam, at cursus velit massa varius velit. Mauris blandit diam nulla, sed pulvinar nisl egestas sit amet. Nulla a scelerisque sem.<br><br>

			Fusce placerat non nunc et pharetra. Duis nec elit in mauris consequat placerat. Proin malesuada eros non dolor ullamcorper, ut rhoncus nibh congue. Suspendisse iaculis rutrum magna, at congue orci. Mauris quam nunc, efficitur ut aliquam sed, commodo in nisi. Pellentesque quam enim, vestibulum a erat nec, pulvinar finibus velit. Donec dapibus quam ligula, eget consectetur mi scelerisque vitae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse potenti. Sed bibendum, dui et molestie maximus, turpis nulla semper est, sed malesuada justo lacus vel nisi. Suspendisse vel turpis vitae neque pharetra commodo. Sed ultrices lectus vitae aliquam sagittis. Duis condimentum non lectus eget ultrices. Duis leo risus, lacinia et volutpat id, posuere vitae leo. Nullam vel lobortis quam, ut ultricies nisi.</div>
			
		</div>
	</div>
  <div class="col-sm-2"></div>
	</div>
</div>

<?php require '../layout/footer.php'; ?>
	
</body>
    
</html>