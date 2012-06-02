<?php
class DefaultController extends Controller {
	
	
	public function index() {
		
		$IBom = new IndeedBom();		
		$template = new Core_Template("default", "default");
		$template->setAttribute("records", $IBom->getAllRecords());
		
	}
}