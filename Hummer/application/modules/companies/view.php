<table cellspacing="10">
	<tr>
		<td><h1>Jobs by <a href='#'><?php echo $company; ?></a></h1></td>
		<td> <button class="button" onclick="document.location.href='<?php echo $_SERVER['HTTP_REFERER'];?>'">Back to List</button></td>
	</tr>
</table>
<div class="container">
<?php
echo JobLayout::formatList($jobs);
?>
</div>