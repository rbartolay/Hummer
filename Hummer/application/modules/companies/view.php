<div class="container">
<h1>Jobs by <a href='#'><?php echo $company; ?></a></h1>
<br><br>
<?php
echo JobLayout::formatList($jobs);
?>
</div>