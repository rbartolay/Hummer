<script type="text/javascript" src="<?php echo Configuration::getJSPath() . "jquery-1.7.2.js";?>"></script>
<script>
$(function() {
	$('a:eq(0)').cluetip({arrows: true, sticky: true, splitTitle: '|', cluetipClass: 'rounded', showTitle: false});
});
</script>
<a href="ajax4.html" title="|first line body|second line body">asd</a>
<center>
<?php echo Form::quickSearch(); ?>
</center>

<img src="<?php echo Configuration::getImagePath() . "bigpicture.jpg"; ?>">

<table cellspacing="10">
	<tr>
		<td width="70%" valign="top">
		<h1>Most Recent Job Posts</h1>
		
			<div class="container">
			<?php echo JobLayout::formatList($records);	?>
			<?php echo "<center>" . JobLayout::getViewOtherJobsButton() . "</center>"; ?>
			</div>
			
		</td>
		<td valign="top">
		<h1>Top Trending Jobs</h1>
		
		<div class="container">
			<?php echo JobLayout::formatList($trending_jobs, true); ?>			
		</div>
		<br>
		<h1>Hiring Companies</h1>
		
		<div class="container">
			<?php echo CompaniesLayout::formatList($companies); ?>
			<?php echo "<center>" . CompaniesLayout::getViewAllCompaniesButton() . "</center>"; ?>
		</div>
		
		</td>
	</tr>
	<tr>
		<td colspan="2">
		<h1>Popular job titles:</h1>
		<div class="container">
		<?php 
		foreach($trending_jobs as $job) {
			echo "<a href='#'>". $job->jobtitle ."</a> <br>";
		}
		?>
		</div>
		</td>
	</tr>
</table>

