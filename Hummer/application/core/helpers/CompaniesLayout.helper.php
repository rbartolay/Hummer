<?php
class CompaniesLayout {
	
	public static function formatList($list) {
		$html = "";

		if(count($list) > 0) {
			$html.= "<table width='100%' cellpadding='10'>";
			foreach($list as $element) {
				$html.= "<tr>";
				$html.= self::formatElement($element);
				$html.= "</tr>";
			}
			$html.= "</table>";
		} else {
			$html.= "<center><span class='error'>No Companies Found.</span></center>";
		}
		
		return $html;
	}
		
	public static function formatElement($element) {
		$relative_time = RelativeTime::getInstance();
		$html = "";
		$html.= "<td>";
		$html.= "<a href='". Configuration::getURLPath() ."/companies/view/". $element->company ."'>" . $element->company . "</a> (" . $element->job_count . ") <br> Last entry : " . $relative_time->getTextForSQLDate($element->last_entry);
		$html.= "</td>";		

		return $html;
	}
	
	public static function getViewAllCompaniesButton() {
		$html = "<button class='button' onclick='document.location=\"". Configuration::getURLPath() . "/companies\"'>View All Companies</button>";
		return $html;
	}
		
	public static function getViewCompanyInfoButton($company) {
		$html = "<button class='button like' onclick='document.location=\"". Configuration::getURLPath() . "/companies/info/". $company ."\"'>Company Info</button>";
		return $html;
	}
	
	public static function getAlphabeticalPagination($default = 'A') {
		$alphabet = range('A', 'Z');
		
		$html = "<ul id='pagination'>";
		foreach($alphabet as $letter) {
			$current = $default == $letter ? "class='current'" : "";
			$html.= "<li><a href='". Configuration::getURLPath() . "/companies/index/". $letter ."' ". $current .">". $letter ."</a></li>";
		}
		$html.= "</ul>";
		
		return $html;
	}
	
}