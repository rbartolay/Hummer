</div>
<div class="bottomMenu">
	<a href="/" title="">Home</a>&nbsp;&nbsp;&nbsp; 
	<a href="<?php echo Configuration::getURLPath() . "/default/about"; ?>" title="">About us</a>&nbsp;&nbsp;&nbsp;
	<a href="<?php echo Configuration::getURLPath() . "/blog"; ?>" title="">Blog</a>&nbsp;&nbsp;&nbsp;
	<a href="" title="">Job search</a>&nbsp;&nbsp;&nbsp; 
	<a href="" title="">Employer area</a>&nbsp;&nbsp;&nbsp; 
	<a href="" title="">Contact us</a>&nbsp;&nbsp;&nbsp;
	<a href="" title="">Terms &amp; conditions</a>&nbsp;&nbsp;&nbsp;
	<a href="<?php echo Configuration::getURLPath() . "/default/privacy"; ?>" title="">Privacy policy</a>&nbsp;&nbsp;&nbsp;
</div>

<?php global $loading_time; ?>
		<div class="powered">Copyright &copy; Hummer.com Job Board <?php echo "2011 - " . date("Y"); ?> <br><?php echo "Page generated in " . Core_Utilities::endTimer($loading_time); ?></div>
		</div>
	
</body>
</html> 