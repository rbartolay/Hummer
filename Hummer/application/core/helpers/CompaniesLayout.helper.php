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
	
	public static function featureCompany($company) {
		$html = '<script type="text/javascript">';
		$html.= '$(function () {';
		$html.= '$(\'.bubbleInfo\').each(function () {';
		$html.= 'var distance = 10;';
		$html.= 'var time = 250;';
		$html.= 'var hideDelay = 500;';
		$html.= 'var hideDelayTimer = null;';
		$html.= 'var beingShown = false;';
		$html.= 'var shown = false;';
		$html.= 'var trigger = $(\'.trigger\', this);';
		$html.= 'var info = $(\'.popup\', this).css(\'opacity\', 0);';
		$html.= '$([trigger.get(0), info.get(0)]).mouseover(function () {';
		$html.= 'if (hideDelayTimer) clearTimeout(hideDelayTimer);';
		$html.= 'if (beingShown || shown) {';		
		$html.= 'return;';
		$html.= '} else {';
		$html.= 'beingShown = true;';
		$html.= 'info.css({';
		$html.= 'top: 0, left: 250, display: \'block\'';
		$html.= '}).animate({';
		$html.= 'top: "-=" + distance + "px", opacity: 1';
		$html.= '}, time, "swing", function() {';
		$html.= 'beingShown = false; shown = true;';
		$html.= '});';
		$html.= '}';
		$html.= 'return false;';
		$html.= '}).mouseout(function () {';
		$html.= 'if (hideDelayTimer) clearTimeout(hideDelayTimer);';
		$html.= 'hideDelayTimer = setTimeout(function () {';
		$html.= 'hideDelayTimer = null;';
		$html.= 'info.animate({';
		$html.= 'top: "-=" + distance + "px", opacity: 0';
		$html.= '}, time, "swing", function () {';
		$html.= 'shown = false;';
		$html.= 'info.css("display", "none");';
		$html.= '});';
		$html.= '}, hideDelay);';
		$html.= 'return false;';
		$html.= '});';
		$html.= '});';
		$html.= '});';
		$html.= '</script>';
		
		$html.= '<div class="bubbleInfo">
		<div>asd
		</div>
		<table id="dpop" class="popup">
		<tbody>
		<tr>
		<td><table class="popup-contents">
		<tbody><tr>
		<th>File:</th>
		<td>coda 1.1.zip</td>
		</tr>
		<tr>
		<th>Date:</th>
		<td>11/30/07</td>
		</tr>
		<tr>
		<th>Size:</th>
		<td>17 MB</td>
		</tr>
		<tr>
		<th>Req:</th>
		<td>Mac OS X 10.4+</td>
		</tr>
		<tr id="release-notes">
		<th>Read the release notes:</th>
		<td><a title="Read the release notes" href="./releasenotes.html">release notes</a></td>
		</tr>
		</tbody></table>
		</td>
		</tr>
		</tbody>
		</table>
		</div>';
				
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
	
	public static function getVisitCompanyWebsiteButton($website) {
		$html = "<a class='button play' target='_blank' href='http://". $website . "'>Visit Company Website</a>";
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