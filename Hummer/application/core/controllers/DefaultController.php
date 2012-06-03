<?php
class DefaultController extends Controller {
		
	public function index() {
	var_dump($_SERVER);
		$jBom = new JobsBom();		
		$template = new Core_Template("default", "default");
		$template->setAttribute("records", $jBom->getAllJobs());		
	}
}