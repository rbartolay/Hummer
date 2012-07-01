<?php
/**
 * URL Helper class used mostly like in url redirection, html anchor, etc.
 * @author levi.bautista
 *
 */
class URL {
	/**
	 * URL Redirect method used to redirect to specific path 
	 * @param unknown_type $object
	 * @param unknown_type $path
	 */
	public static function redirect($object,$path) {
		if($object->success) {
			header("Location: ".Configuration::getURLPath()."/".$path."/".urlencode($object->message));
		} else {
			header("Location: ".Configuration::getURLPath()."/".$path."/".urlencode($object->message));
		}
	}
	
	/**
	 * Anchor method creates standard html anchor link
	 * @param unknown_type $url
	 * @param unknown_type $text
	 * @param unknown_type $attributes
	 */
	public static function anchor($url,$text,$attributes = null) {
		return "<a href='".Configuration::getURLPath()."/".$url."' ".$attributes.">".$text."</a>";
	}
	
	
	/**
	 * Builds an object to url compatible string.
	 * Essential for creating a query string attachment	 
	 * @param unknown_type $object
	 * @return string
	 */
	public static function buildObjectAsQueryString($object) {
		if(is_object($object) or die(__METHOD__ . " requires an object"));
		$qs = "";
		
		$tmp = 0;
		foreach($object as $key => $value) {
			$qs.= $key . "=" . $value;
			
			if(count($object) > $tmp) {
				$qs.="&";
			}
			$tmp++;
		}
		
		return $qs;
	}
	
	public static function buildArrayAsQueryString($array) {
		if(is_object($array) or die(__METHOD__ . " requires an array"));
		return $this->buildObjectAsQueryString((object)$array);
	}
}