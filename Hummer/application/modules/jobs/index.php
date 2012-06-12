<h1>Jobs</h1>
<div class="container">
	<?php
		//var_dump($jobs->pages);
		echo HTMLLayout::pagination($jobs->pages);
		//var_dump($jobs->record_count);
		
	?>
	<?php echo JobLayout::formatList($jobs->data); ?>
</div>