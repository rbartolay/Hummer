<?php
class JobLayout {
	
	public static function formatList($list) {
		$html = "<table>";

		foreach($list as $element) {
			$html.= "<tr>";
			$html.= self::formatElement($element);
			$html.= "</tr>";
		}

		$html.= "</table>";
		return $html;
	}

	public static function formatElement($element) {
		$relative_time = RelativeTime::getInstance();
		
		$location = self::getLocation($element);
		
		$html = "";
		$html.= "<td>";
		$html.= "<a href='". $element->url ."' id='jobtitle'>" . $element->jobtitle . "</a><br>";
		$html.= "<span id='company'>" . $element->company ."</span> ". $location . "<br>";
		$html.= nl2br($element->snippet) . "<br>";		
		$html.= "Posted <a href='#' title='". Calendar::formatDateAndTime($element->unix_date) ."'>" . $relative_time->getTextForSQLDate(date("Y-m-d h:i:s", $element->unix_date)) . "</a>";
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