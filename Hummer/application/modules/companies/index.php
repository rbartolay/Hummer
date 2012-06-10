<table width="100%">
	<tr>
		<td width="250px"><h3>Companies</h3></td>
		<td align="right"><?php echo CompaniesLayout::getAlphabeticalPagination($current); ?></td>
	</tr>
</table>


<?php
echo CompaniesLayout::formatList($companies);
?>