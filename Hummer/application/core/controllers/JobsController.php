<?php 
class JobsController extends Controller {
	
	public function index() {
		$jBom = new JobsBom();
		$template = new Core_Template("default", "jobs");
		$template->setAttribute("jobs", $jBom->getAllJobs());
	}	
}
?>