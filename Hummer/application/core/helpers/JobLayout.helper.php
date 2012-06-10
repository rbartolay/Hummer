<?php
class JobLayout {
	
	public static function formatList($list, $simple = false) {
		$html = "<table cellpadding='10'>";
		
		if(count($list) > 0) {
			if(!$simple) {
				foreach($list as $element) {
					$html.= "<tr>";
					$html.= self::formatElement($element);
					$html.= "</tr>";
				}
			} elseif($simple) {
				foreach($list as $element) {
					$html.= "<tr>";
					$html.= self::formatElementSimple($element);
					$html.= "</tr>";
				}
			}
		} else {
			$html.= "<center><span class='error'>No Records Found.</span></center>";
		}
		
		$html.= "</table>";
		return $html;
	}

	public static function formatElement($element) {
		$relative_time = RelativeTime::getInstance();
		
		$location = self::getLocation($element);
		
		$html = "";
		$html.= "<td>";
		$html.= "<a href='". $element->url ."' id='jobtitle' target='_blank'>" . $element->jobtitle . "</a><br>";
		$html.= "<span id='company'>" . $element->company ."</span><br> ". $location . "<br><br>";
		$html.= nl2br($element->snippet) . "<br>";		
		$html.= "Posted <a href='#' title='". Calendar::formatDateAndTime($element->unix_date_posted) ."'>" . $relative_time->getTextForSQLDate(date("Y-m-d h:i:s", $element->unix_date_posted)) . "</a><br>";
		$html.= "View Other Jobs from <a href='". Configuration::getURLPath() ."/companies/view/". $element->company ."'>" . $element->company . "</a>";
		$html.= "</td>";
		$html.= "<td><button class='applynow' onclick=\"window.open('". $element->url ."')\">Apply Now</button></button>";
		$html.= "</td>";

		return $html;
	}
	
	public static function formatElementSimple($element) {
		$relative_time = RelativeTime::getInstance();
		
		$html = "";
		$html.= "<td>";
		$html.= "<a href='#' id='jobtitle'>" . $element->jobtitle . "</a> (". $element->job_count .")<br>";		
		$html.= "Posted <a href='#' title='". Calendar::formatDateAndTime($element->unix_date_posted) ."'>" . $relative_time->getTextForSQLDate(date("Y-m-d h:i:s", $element->unix_date_posted)) . "</a>";
		$html.= "</td>";
		
		return $html;
	}
	
	private static function getLocation($element) {
		$location = "";
		if($element->api_source_id == 1) {
			$location = "<span id='location'>" . $element->city . ", " . $element->state . "</span>";
		}
		
		if($element->api_source_id == 2) {
			$location = "<span id='location'>" . $element->location . "</span>";
		}
		
		if($element->api_source_id == 6) {
			$location = "<span id='location'>" . $element->location . "</span>";
		}
		return $location;
	}
	
}
