<?php
class DefaultController extends Controller {
		
	public function index() {

		$IBom = new IndeedBom();		
		$template = new Core_Template("default", "default");
		$template->setAttribute("records", $IBom->getAllRecords());
		
		
		$api = new APICareerjet('en_GB') ;
		$page = 1 ; # Or from parameters.
		
		$result = $api->search(array('sort'=>'date', 'pagesize' => 50)) ;
		
		if ( $result->type == 'JOBS' ){
			echo "Found ".$result->hits." jobs" ;
			echo " on ".$result->pages." pages\n" ;
			$jobs = $result->jobs ;
		
			foreach( $jobs as $job ){
				var_dump($job);
				echo "\n" ;
			}
		
			# Basic paging code
			if( $page > 1 ){
				echo "Use \$page - 1 to link to previous page\n";
			}
			echo "You are on page $page\n" ;
			if ( $page < $result->pages ){
				echo "Use \$page + 1 to link to next page\n" ;
			}
		}
		
		# When location is ambiguous
		if ( $result->type == 'LOCATIONS' ){
			$locations = $result->solveLocations ;
			foreach ( $locations as $loc ){
				echo $loc->name."\n" ; # For end user display
				## Use $loc->location_id when making next search call
				## as 'location_id' parameter
			}
		}
	}
}