<?php if(isset($_SESSION['flash_text'])): ?>
	<div class="alert alert-info flash-alert" role="alert">
		<strong><?php 
			if(isset($_SESSION['flash_title']))
			{ 
				echo ($_SESSION['flash_title']);
			}
			else
			{
				echo ('Erreur');
			}
			?></strong>
			<ul>
					<li><?php if(isset($_SESSION['flash_text'])){ echo ($_SESSION['flash_text']); }?></li>
			</ul>
	</div>
<?php endif; ?>