<?php
class DefaultController extends Controller {
		
	public function index() {	
		$jBom = new JobsBom();		
		$template = new Core_Template("default", "default");
		$template->setAttribute("records", $jBom->getAllJobs());		
	}
}