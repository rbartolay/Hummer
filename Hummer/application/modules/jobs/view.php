<h1><?php echo $job->jobtitle; ?></h1>

<div class="container">
	<h3>Company</h3>
	<p><?php echo "<a href='". Configuration::getURLPath() ."/companies/view/". $job->company ."'>" . $job->company . "</a>"; ?></p><br>
	
	<h3>Description</h3>
	<p><?php echo $job->snippet; ?></p><br>
	
	<h3>Location</h3>
	<p><?php echo $job->location;?></p><br>
	
	<h3>Date Posted</h3>
	<p><?php echo Calendar::formatDate($job->unix_date_posted);?></p><br><br>
	
			
	<button class='applynow' onclick="window.open('<?php echo $job->url; ?>')">Apply Now</button></button>
	<button class='applynow'>Save this Job</button></button>
	
	
</div>
<br>
<h2>Other Jobs from <?php echo "<a href='". Configuration::getURLPath() ."/companies/view/". $job->company ."'>" . $job->company . "</a>";?></h2>
<div class="container">
	<?php echo JobLayout::formatList($other_jobs); ?>
</div>