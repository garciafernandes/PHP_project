<!--<div class="page-header">
	
</div>



<a class="btn btn-md btn-success" href="<?=DIR;?>subpage">
	<?php echo Language::show('openSubPage', 'Welcome'); ?>
</a>-->

<a href="<?=DIR;?>mon-compte/voir-compte">Chez Test</a>

<div class="container">
	<?php 
		foreach($result as $p) {
			echo "<p>".$p->nom."</p>";
			echo "<p>".$p->description."</p>";
		}
	?>
</div>
