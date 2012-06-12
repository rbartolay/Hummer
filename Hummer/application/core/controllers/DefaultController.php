<?php
class DefaultController extends Controller {
		
	public function index() {
		$jBom = new JobsBom();
		$cBom = new CompaniesBom();
		$template = new Core_Template("default", "default");
		$template->setAttribute("records", $jBom->getAllRecentJobs());
		$template->setAttribute("companies", $cBom->getRecentActiveCompanies());
		$template->setAttribute("trending_jobs", $jBom->getTrendingJobs());
	}
	
}