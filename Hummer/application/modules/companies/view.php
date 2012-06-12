<h1>Jobs by <a href='#'><?php echo $company; ?></a></h1>
<div class="container">
<?php
echo JobLayout::formatList($jobs);
?>
</div>