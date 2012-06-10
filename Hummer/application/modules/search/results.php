<table width="100%">
	<tr>
		<td><h1>Search Results</h1></td>
		<td align="right"><?php echo Form::quickSearch(); ?></td>
	</tr>
</table>

<div class="container">
<?php 
echo JobLayout::formatList($results);
?>
</div>