<?php 
class HTMLLayout {
	public static function pagination($pages, $current_page = 1) {
				
		$html = "<ul id='pagination'>";
		foreach($pages as $page) {
			$current = $current_page == $page->page ? "class='current'" : "";
			$html.= "<li><a href='". $page->url ."' ". $current .">". $page->page ."</a></li>";
		}
		$html.= "</ul>";
		
		return $html;
	}
}
?>