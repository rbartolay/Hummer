<script src="<?php echo Configuration::getJSPath() . "jquery.highlight.js";?>"></script>
<script type="text/javascript">
	$(function() {
		<?php if(@$_GET['jobtitle'] != "") {?>
		$('table').highlight('<?php echo @$_GET['jobtitle'];?>');
		<?php } ?>
		<?php if(@$_GET['company'] != "") {?>
		$('table').highlight('<?php echo @$_GET['company'];?>');
		<?php } ?>
	});
</script>

<table width="100%">
	<tr>
		<td><h1>Search Results</h1></td>
		<td align="right">
			<button class="button" 
			onclick="document.location.href='<?php echo Configuration::getURLPath() . "/search?" . $_SERVER['REDIRECT_QUERY_STRING']; ?>'">
			Refine Search
			</button>
		</td>
	</tr>
</table>
<?php echo HTMLLayout::pagination($pages, $current_page);?><br>
<div class="container">
<?php 
echo JobLayout::formatList($results);
?>
</div>