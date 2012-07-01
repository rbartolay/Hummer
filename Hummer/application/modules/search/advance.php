<table cellspacing="10" width="100%">
	<tr>
		<td valign="top">
		<h1>Job Search</h1>
			<div class="container">
				<form class="form" method="GET" action="<?php echo Configuration::getURLPath() . "/search/advance"; ?>">
					<table>
						<tr>
							<td><label for="name">Job Title</label></td>
							<td><input type="text" name="jobtitle" value="<?php echo @$_GET['jobtitle']; ?>" /></td>
						</tr>
						
						<tr>
							<td><label for="email">Company</label></td>
							<td><input type="text" name="company" value="<?php echo @$_GET['company']; ?>" /></td>
						</tr>
												
						<tr>
							<td colspan="2"><input  class="submit" type="submit" value="Advance Search" /></td>
						</tr>
					</table>
				</form>
			</div>
		</td>
		<td valign="top" width="30%">
			<h1>Hiring Companies</h1>
			<div class="container">
				<?php echo CompaniesLayout::formatList($companies); ?>
			</div>
		</td>
	</tr>
</table>