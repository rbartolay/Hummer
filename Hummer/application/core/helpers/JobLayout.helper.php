<?php
class JobLayout {
	public static function formatList($list) {
		$html = "<table>";
		
		foreach($list as $element) {
			$html.= "<tr>";
			$html.= "	<td>";
			$html.= self::formatElement($element);
			$html.= "	</td>";
			$html.= "</tr>";
		}		
		
		$html.= "</table>";
		return $html;
	}
	
	public static function formatElement($element) {		
		$html = "<table>";
		$html.= "<tr>";
		
		foreach($element as $key => $value) {
			
			$html.= "<td>";
			$html.= $key;
			$html.= "</td>";
			
			$html.= "<td>";
			$html.= $value;
			$html.= "</td>";
			
		}
		
		$html.= "</tr>";
		$html.= "</table>";
		return $html;
	}
}