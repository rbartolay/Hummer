<style type="text/css">
							.hasPlaceholder {
								color: #777;
							}
							</style>
<div style="padding-top:30px;"></div>
			<?php echo Layout::getTopBanners();?>
                	
                <div id="search-container">
                	<h2>QUICK JOB SEARCH</h2>
                    <form action="<?php echo Configuration::getURLPath()?>/search/getSimpleResults" method="post">
                    	<div class="search-inside-cont">
                    		<input type="text" name="keywords" placeholder="Enter Career Posting or Company Name" size="50" />
                            <select name="option">
                            	<option value="1">Career Title</option>
                                <option value="2">Company</option>
                            </select> 
                            <input type="submit" name="search" class="btn-search" value="" />
                        </div>
                    </form>
                </div>
<div id="inside-content" style="margin:5px;">
                	<?php 
                	echo Layout::getBanners()
                	?>
                    <?php echo Career::feed(); ?>
                    <br  style="clear:both"/>
                    <br  style="clear:both"/>
                    <?php 
                	echo Layout::getHiringCompanies();
                	?>
                    <div id="demo5" style="margin-top:10px;"></div>

 <script type="text/javascript">
						jQuery(function() {
							   jQuery.support.placeholder = false;
							   test = document.createElement("input");
							   if("placeholder" in test) jQuery.support.placeholder = true;
							});
							
							$(function() {
							   if(!$.support.placeholder) { 
							      var active = document.activeElement;
							      $(":text").focus(function () {
							         if ($(this).attr("placeholder") != "" && $(this).val() == $(this).attr("placeholder")) {
							            $(this).val("").removeClass("hasPlaceholder");
							         }
							      }).blur(function () {
							         if ($(this).attr("placeholder") != "" && ($(this).val() == "" || $(this).val() == $(this).attr("placeholder"))) {
							            $(this).val($(this).attr("placeholder")).addClass("hasPlaceholder");
							         }
							      });
							      $(":text").blur();
							      $(active).focus();
							      $("form:eq(0)").submit(function () {
							         $(":text.hasPlaceholder").val("");
							      });
							   }
							});
					</script>
                <br />
</div>